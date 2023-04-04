<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMailer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\GeneralPurchaseInfo;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\HargaProduk;
use App\Models\BeliKuota;
use Illuminate\Http\Request;

class BeliKuotaController extends Controller
{
    // Return all list of harga Pulsa
    public function get_list($operator = null){
        $created_list = "";
        // check if the operator is null 
        if (!is_null($operator)){
            // get the operator mobile data recharge list 
            $data = HargaProduk::where("kodeProduk", "like", "$operator/%")->where("status","ready")->get();
        } else {
            // get all mobile recharge recharge list 
            $data = HargaProduk::where("kodeProduk", "like", "%/%")->where("status","ready")->where("grupProduk","not","-")->get(10);
        }
        // create html element based on the data retreived from database 
        $category = HargaProduk::where("kodeProduk", "like", "$operator/%")->where("status","ready")->distinct()->pluck("grupProduk");
        foreach ($category as $cat){
            $created_list .= "<optgroup label='$cat'>";
            foreach ($data->where("grupProduk",$cat) as $datum){
                // Create the <option> element 
                $created_list .= "<option value='" . $datum['kodeProduk'] ."'>Kuota " . $datum["deskripsiProduk"] . " => Rp." . number_format(intval($datum["hargaProduk"]), "0",",",".") . "</option>";
            }
            $created_list .= "</optgroup>";
        }
        // return the created element to front 
        return $created_list;
    }

    // Main form processing 
    public function add(Request $request)
    {
        // Create a lable of transaction 
        $kindTrx = 'beli-kuota';
        // Create the transaction uniquer code 
        while (true){
            $trxCode = Str::random(10);
            // Check if the code is exits 
            if(GeneralPurchaseInfo::where('idTransaksi',$trxCode)->exists()){
                continue;
            } else {
                while (true){
                    // Create a hash code to access the detail data 
                    $secretKey = Str::random(10);
                    if (GeneralPurchaseInfo::where('accessCode',$secretKey)->exists()){
                        continue;
                    } else {
                        break 2; //breaking two loop at the same time 
                    }
                }
            }
        }
        // Create a unique code of 3 digit integer 
        while (true){
            $uniqueCode = rand(100,999);
            if (!BeliKuota::where("kodeUnik",$uniqueCode)->exists()){
                break;
            }
        }
        // Check if a product is exist
        if (!HargaProduk::where('kodeProduk',$request->jumlahKuota)->exists()){
            Alert::error("Error", "Produk Tidak ditemukan");
            return redirect()->route("pulsa-kuota");
        }
        //Get product data 
        $tabelProduk = HargaProduk::where('kodeProduk',$request->jumlahKuota)->first();
        // Check product if its available 
        if ($tabelProduk->status != "ready"){
            Alert::error("Maaf", "Saat ini, produk yang kamu pilih sedang tidak tersedia");
            return redirect()->route("pulsa-kuota");
        }
        // extract product data from HargaProduk model
        $jenisKuota = $tabelProduk->grupProduk;
        $hargaKuota = $tabelProduk->hargaProduk;
        $detailKuota = $tabelProduk->deskripsiProduk;
        // Validate the request 
        $request->validate(
            // Validation arguments 
            [
                'nama' => 'required|min:6',
                'hp' => 'required|min:10|numeric',
                'email' => 'required|email',
                'operator' => 'required',
                'jumlahKuota' => 'required',
                'metodeBayar' => 'required'
            ],
            // Custom validation message 
            [
                'nama.required' => 'Kami membutuhkan nama anda',
                'hp.required' => 'Nomor telepon dibutuhkan',
                'email.required' => 'Email dibutuhkan',
                'operator.required' => 'Harap Cek kembali nomor anda',
                'jumlahKuota.required' => 'Harap masukan jumlah pulsa yang akan dibeli',
                'metodeBayar.required' => 'Harap pilih metode bayar'
        ]);

        // Add record of the transaction to the database via model  
        BeliKuota::create([
            'idTransaksi' => $trxCode,
            'nama' => $request->nama,
            'creator' => Auth::check() ? Auth::user()->username : '',
            'hp' => $request->hp,
            'email' => $request->email,
            'operator' => $request->operator,
            'jenisKuota' =>$jenisKuota,
            'kodeKuota' =>$request->jumlahKuota,
            'hargaKuota' => $hargaKuota,
            'detailKuota' => $detailKuota,
            'kodeUnik' => $uniqueCode,
            'totalBayar' => (int)$hargaKuota+$uniqueCode,
            'metodeBayar' => $request->metodeBayar,
            'accessCode' => $secretKey,
        ]);
        // Add the general record to the database 
        TransactionController::add_general_transaction_info($trxCode,Auth::check() ? Auth::user()->username : 'anonim',$kindTrx,'',$request->hp,$hargaKuota + $uniqueCode,$request->metodeBayar,$secretKey);
        // Mail the invoice to the email that has been inserted
        Mail::to($request->email)->send(new InvoiceMailer($kindTrx,$trxCode,'menunggu'));
        // return to the invoice page 
        return redirect()->route('invoice',[$kindTrx,$trxCode,$secretKey]);
    }
}
