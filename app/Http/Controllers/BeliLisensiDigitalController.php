<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMailer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\GeneralPurchaseInfo;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\HargaProduk;
use App\Models\LisensiDigital;
use Illuminate\Http\Request;

class BeliLisensiDigitalController extends Controller
{
    // Return the main page 
    public function index()
    {
        return view('transaction.lisensiDigital');
    }

    // Redirect to the selected product 
    public function form_to($targetProduk)
    {
        $selected = $targetProduk;
        // Pass the data to the front 
        return view('transaction.form.lisensiDigital', ['selected' => $selected]);
    }

    // Main form processing here 
    public function add(Request $request)
    {
        // Create a lable of transaction 
        $kindTrx = 'lisensi-digital';
        // Create the transaction code 
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
            if (!LisensiDigital::where("kodeUnik",$uniqueCode)->exists()){
                break;
            }
        }
        // Check if a product is exist
        if (!HargaProduk::where('kodeProduk',$request->lisensiDigital)->exists()){
            Alert::error("Error", "Produk Tidak ditemukan");
            return redirect()->route("pulsa-kuota");
        }
        //Get product data 
        $tabelProduk = HargaProduk::where('kodeProduk',$request->lisensiDigital)->first();
        // Check product if its available 
        if ($tabelProduk->status != "ready"){
            Alert::error("Maaf", "Saat ini, produk yang kamu pilih sedang tidak tersedia");
            return redirect()->route("pulsa-kuota");
        }
        // extract product data from HargaProduk model
        $namaLisensi = $tabelProduk->namaProduk;
        $hargaLisensi = $tabelProduk->hargaProduk;
        // Validate the request 
        $request->validate(
            // Validation arguments 
            [
                'nama' => 'required|min:6',
                'email' => 'required|email',
                'hp' => 'nullable|numeric|min:10',
                'lisensiDigital' => 'required',
                'metodeBayar' => 'required'
            ],
            // Custom validation message 
            [
                'nama.required' => 'Kami membutuhkan nama anda',
                'email.required' => 'Email dibutuhkan',
                'lisensiDigital.required' => 'Harap pilih lisensi yang sesuai',
                'metodeBayar.required' => 'Harap pilih metode bayar'
        ]);

        // Add record of the transaction to the database via model  
        LisensiDigital::create([
            'idTransaksi' => $trxCode,
            'nama' => $request->nama,
            'creator' => Auth::check() ? Auth::user()->username : '',
            'email' =>$request->email,
            'hp' => $request->hp,
            'kodeProduk' => $request->lisensiDigital,
            'jenisLisensi' => $namaLisensi,
            'hargaLisensi' => $hargaLisensi,
            'kodeUnik' => $uniqueCode,
            'totalBayar' => (int)$hargaLisensi+$uniqueCode,
            'metodeBayar' => $request->metodeBayar,
            'accessCode' => $secretKey
        ]);
        // Add the general record to the database 
        TransactionController::add_general_transaction_info($trxCode,Auth::check() ? Auth::user()->username : 'anonim',$kindTrx,$request->email,$request->hp,$hargaLisensi + $uniqueCode,$request->metodeBayar,$secretKey);
        // Mail the invoice to the email that has been inserted
        Mail::to($request->email)->send(new InvoiceMailer($kindTrx,$trxCode,'menunggu'));
        // return to the invoice page 
        return redirect()->route('invoice',[$kindTrx,$trxCode,$secretKey]);
    }
}
