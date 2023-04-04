<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\InvoiceMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\GeneralPurchaseInfo;
use App\Models\Refund;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Spatie\Browsershot\Browsershot;

class TransactionController extends Controller
{
    // Get the admin fee based on user login and user membership status 
    public static function get_admin_fee(){
        if (!(Auth::check() && Auth::user()->membership != "pendatang")){
            return 500;
        } else {
            return 0;
        }
    }

    // add general record of transaction via model
    public static function add_general_transaction_info($id,$creator,$jenis,$email,$hp,$total,$metode,$key)
    {
        GeneralPurchaseInfo::create([
            'idTransaksi' => $id,
            'jenisTransaksi'=> $jenis,
            'creator' => $creator,
            'email' => $email,
            'hp' => $hp,
            'totalBayar' => $total,
            'metodeBayar' => $metode,
            'accessCode' => $key,
        ]);
    }

    // Invoice handling here 
    public function invoice($jenisTransaksi, $idTransaksi, $secretKey)
    {   
        // Get the target table 
        if ($jenisTransaksi != 'refund'){
            $targetTable = str_replace('-','_',$jenisTransaksi);
        } else {
            $targetTable = $jenisTransaksi;
        }
        // add s (Because all of table ended with s)
        $targetTable.= 's';
        // get data 
        $recentTrx = DB::table($targetTable)->where('idTransaksi',$idTransaksi)->first();
        // Check if the route has access code 
        if ($secretKey == $recentTrx->accessCode){
            return view('transaction.invoice',compact('recentTrx'));
        } else {
            // Abort if no hash
            return abort(404);
        }
    }

    // Get real complete data 
    public static function get_real_data($id)
    {
        $generalData = GeneralPurchaseInfo::where('idTransaksi',$id)->first();
        $realData = DB::table(str_replace('-','_',$generalData->jenisTransaksi).'s')->where('idTransaksi',$id);
        return $realData;
    }

    // return refund page 
    public function refund($idWillRefund)
    {
        $temp = TransactionController::get_real_data($idWillRefund);
        return view('refund',['idWillRefund' => $idWillRefund, 'data' => $temp]);
    }


    //refund mechanism 
    public function add_refund_transaction(Request $request)
    {
        // Create transaction label 
        $kindTrx = 'refund';
        // create the unique refund code 
        while (true){
            $trxCode = "refund-".Str::random(5);
            // Check if the code is exist 
            if(GeneralPurchaseInfo::where('idTransaksi',$trxCode)->exists()){
                continue;
            } else {
                while (true){
                    $secretKey = Str::random(10);
                    if (GeneralPurchaseInfo::where('accessCode',$secretKey)->exists()){
                        continue;
                    } else {
                        break 2;
                    }
                }
            }
        }
        // Upload the submited payment receipt to the server 
        $fileToUp = $request->file('buktiTransaksi');
        $fileExtension = '.'.$fileToUp->getClientOriginalExtension();
        $request->file('buktiTransaksi')->storeAs('public/struk/refund', $trxCode.$fileExtension  ,'local');
        // validate the request 
        $request->validate(
            // validation rules
            [
                'nama' => 'required|min:6',
                'platform' => 'required',
                'username' => 'required',
                'buktiTransaksi' => 'required|mimes:png,jpg,svg,pdf',
                'nominalRefund' => 'required|numeric',
                'tanggalBayar' => 'required|date',
                'bankTujuan' => 'required',
                'noRek' => 'required|numeric',
                'pemilikRek' => 'required',
                'idTerkait' => 'required',
                'sebab' => 'required',
            ],
            // custom validation error message 
            [
                'nama.required' => 'Harap Masukan Nama Kamu',
                'nama.min' => 'Tuliskan Nama Minimal 6 Huruf',
                'platform.required' => 'Pilih Platform yang sudah tersedia',
                'username.required' => 'Harap Tuliskan akun kamu agar tim bisa menghubungi kamu',
                'buktiTransaksi.required' => 'Harap sisipkan bukti transaksi',
                'buktiTransaksi.mimes' => 'Harap sisipkan bukti transaksi dalam format png / jpg / svg / pdf',
                'nominalRefund.required' => 'Masukan Nominal Refund',
                'nominalRefund.numeric' => 'Kolom Nominal Refund hanya boleh di isi dengan angka',
                'tanggalBayar.required' => 'Harap pilih tanggal Transaksi',
                'tanggalBayar.date' => 'Masukan tanggal dengan benar',
                'bankTujuan.required' => 'Harap Pilih Bank Tujuan. Jika tidak ada, harap hubungi admin',
                'noRek.required' => 'Harap Masukan No. Rekening Tujuan',
                'noRek.numeric' => 'Kolom No. Rekening hanya boleh di isi dengan angka',
                'pemilikRek.required' => 'Nama pemilik Rekening dibutuhkan untuk proses verifikasi',
                'idTerkait.required' => 'Id Transaksi Terkait dibutuhkan untuk proses verifikasi Refund',
                'sebab.required' => 'Penyebab refund dibutuhkan untuk analisis'
        ]);
        // add the refund record to the database via model 
        Refund::create([
            'idTransaksi' => $trxCode,
            'nama' => $request->nama,
            'platform' => $request->platform,
            'username' => $request->username,
            'fileBukti' => $trxCode.$fileExtension,
            'tanggalBayar' => $request->tanggalBayar,
            'nominalRefund' => $request->nominalRefund,
            'bankTujuan' => $request->bankTujuan,
            'noRek' => $request->noRek,
            'pemilikRekening' => $request->pemilikRek,
            'idTerkait' => $request->idTerkait,
            'sebab' => $request->sebab,
            'accessCode' => $secretKey,
        ]);
        // add general record to database 
        $this->add_general_transaction_info($trxCode,Auth::user()->username,$kindTrx,$request->username,'-',$request->nominalRefund,$request->bankTujuan,$secretKey);
        // return to the invoice page 
        return redirect()->route('invoice',[$kindTrx,$trxCode,$secretKey]);
    }

    // Update payment status 
    public function update_payment_status(Request $request)
    {   
        // get targeted table 
        $targetTable = str_replace('-','_',$request->jenisTransaksi);
        $targetTable .= 's';
        $dataTemp = DB::table($targetTable)->where('idTransaksi',$request->idTransaksi)->first();
        // check if the the data is not older than 3 hours after transaction was made 
        if (Carbon::now()->lessThanOrEqualTo(Carbon::parse( $dataTemp->created_at )->addHours(3))){
            // Update the status based on which button is clicked (SEE invoice.blade.php)
            DB::table($targetTable)->where('idTransaksi',$request->idTransaksi)->update([
                'statusProses' => $request->statusProses,
                'sebab' => $request->sebab
            ]);
            // Update the data that stored in general record 
            DB::table('general_purchase_infos')->where('idTransaksi',$request->idTransaksi)->update(['status' => $request->statusProses]);
            // Fire an success alert (PAYMENT VERIFIED)
            if ($request->statusProses == 'VERIFY'){
                Alert::success('Berhasil','Pembayaran Kamu Sedang Diverifikasi');
            }
            // Fire an success alert (PAYMENT CANCELLED)
            if ($request->statusProses == 'CANCEL'){
                Alert::success('Berhasil','Pembayaran Kamu Dibatalkan');
                Mail::to($dataTemp->email)->send(new InvoiceMailer($dataTemp->jenisTransaksi,$request->idTransaksi,'batal'));
            }
        } else {
            // Fire an error alert (PAYMENT EXPIRED)
            Alert::error('Oops!', 'Transaksi Sudah Expired');
        }
        // Return to the invoice 
        return redirect()->route('invoice',[$request->jenisTransaksi,$request->idTransaksi,$dataTemp->accessCode]);
    }

    // Handle the confirmation link from the email
    public function emailPayment($status,$id)
    {
        // get the targeted data 
        $data = DB::table('general_purchase_infos')->where('idTransaksi',$id)->first();
        // check the status 
        if ($data->status == 'WAITING'){
            // Change the status to VERIFY 
            DB::table(str_replace('-','_',$data->jenisTransaksi).'s')->where('idTransaksi',$id)->update(['statusProses' => Str::upper($status)]);
            DB::table('general_purchase_infos')->where('idTransaksi',$id)->update(['status' => $status]);
            Alert::success('Berhasil','Pembayaran kamu sedang diverifikasi');
        } elseif ($data->status == 'PROCESS'){
            // Fire an error (PAYMENT ALREADY CONFIRMED)
            ALert::error('Oops!','Kamu sudah membayar transaksi-mu');
        } elseif ($data->status == 'SUCCESS'){
            // Fire an error (PAYMENT ALREADY SUCCESS)
            ALert::error('Oops!','Transaksi-mu sudah berhasil diproses');
        } else {
            // Fire an error (PAYMENT ALREADY CANCELED)
            ALert::error('Oops!','Transaksi-mu telah dibatalkan');
        }
        // Return to the invoice 
        return redirect()->route('invoice',[$data->jenisTransaksi,$id,$data->accessCode]);
    }

    // Create the receipt (Only for Transfer Bank and Bayar VA)
    public function createStruk($kind,$id)
    {
        $targetTable = str_replace('-','_',$kind);
        $targetTable.= 's';
        $dataTemp = DB::table($targetTable)->where('idTransaksi',$id)->first();
        return view('email.struk',['recentTrx' => $dataTemp]);
    }

    // View the receipt (Only for Transfer Bank and Bayar VA)
    public function viewStruk($kind,$id)
    {
        $targetTable = str_replace('-','_',$kind);
        $targetTable.= 's';
        $dataTemp = DB::table($targetTable)->where('idTransaksi',$id)->first();
        return view('dashboard.email.struk',['recentTrx' => $dataTemp]);
    }

    // Convert the receipt into PNG     
    public function toPng($kind,$id)
    {
        if (!File::exists(public_path('storage/struk/transfer/struk-'.$id.'.png'))){
            // create the PNG file based on the blade view using BrowserShot Library 
            Browsershot::url(route('createStruk',[$kind,$id]))->windowSize(800,1200)->save('storage/struk/transfer/struk-'.$id.'.png');
            return response()->download(public_path('storage/struk/transfer/struk-'.$id.'.png'));
        } else {
            return response()->download(public_path('storage/struk/transfer/struk-'.$id.'.png'));
        }
    }
}
