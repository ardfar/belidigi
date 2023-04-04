<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMailer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\GeneralPurchaseInfo;
use App\Models\BeliPulsa;
use App\Models\HargaProduk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BeliPulsaController extends Controller
{
    // Return main page of Beli Pulsa and Kuota 
    public function index()
    {
        return view('transaction.pulsaKuota');
    }

    // Return all list of harga Pulsa
    public function get_list($operator = null){
        $created_list = "";
        // check if the operator is null 
        if (!is_null($operator)){
            // get the operator mobile recharge list 
            $data = HargaProduk::where("kodeProduk", "like", "$operator-%")->where("status","ready")->get();
        } else {
            // get all mobile recharge list 
            $data = HargaProduk::where("kodeProduk", "like", "%-%")->where("status","ready")->get(10);
        }
        // create html element based on the data retreived from database 
        foreach ($data as $datum){
            $sliced_value = explode("-",$datum["kodeProduk"]); //data= AXIS-10K => ["AXIS", "10K"]
            $sliced_value = explode("K",$sliced_value[1]); //data= ["AXIS", "10K"] => ["10","K"]
            $sliced_value = intval($sliced_value[0]) * 1000; // data= ["10","K"] => 10 * 1000 ==> 10000
            // Create the <option> element 
            $created_list .= "<option value=" . $datum['kodeProduk'] .">Pulsa " . number_format($sliced_value, "0",",",".") . " => Rp." . number_format(intval($datum["hargaProduk"]), "0",",",".") . "</option>";
        }
        // return the created element to front 
        return $created_list;
    }

    // Main Process of Transaction
    public function add(Request $request)
    {
        // Create a lable of transaction 
        $kindTrx = 'beli-pulsa';
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
            if (!BeliPulsa::where("kodeUnik",$uniqueCode)->exists()){
                break;
            }
        }
        // Check if a product is exist
        if (!HargaProduk::where('kodeProduk',$request->jumlahPulsa)->exists()){
            Alert::error("Error", "Produk Tidak ditemukan");
            return redirect()->route("pulsa-kuota");
        }
        //Get product data 
        $tabelProduk = HargaProduk::where('kodeProduk',$request->jumlahPulsa)->first();
        // Check product if its available 
        if ($tabelProduk->status != "ready"){
            Alert::error("Maaf", "Saat ini, produk yang kamu pilih sedang tidak tersedia");
            return redirect()->route("pulsa-kuota");
        }
        // extract product data from HargaProduk model
        $jumlahPulsa = $tabelProduk->deskripsiProduk;
        $hargaPulsa = $tabelProduk->hargaProduk;
        // Validate the request 
        $request->validate(
            // Validation argument 
            [
                'nama' => 'required|min:6',
                'hp' => 'required|min:10|numeric',
                'email' => 'required|email',
                'operator' => 'required',
                'jumlahPulsa' => 'required',
                'metodeBayar' => 'required'
            ],
            // customized error message 
            [
                'nama.required' => 'Kami membutuhkan nama anda',
                'hp.required' => 'Nomor telepon dibutuhkan',
                'email.required' => 'Email dibutuhkan',
                'operator.required' => 'Harap Cek kembali nomor anda',
                'jumlahPulsa.required' => 'Harap masukan jumlah pulsa yang akan dibeli',
                'metodeBayar.required' => 'Harap pilih metode bayar'
            ]);
        // Add a transaction record to the database using the BeliPulsa model 
        BeliPulsa::create([
            'idTransaksi' => $trxCode,
            'nama' => $request->nama,
            'creator' => Auth::check() ? Auth::user()->username : '',
            'hp' => $request->hp,
            'email' => $request->email,
            'operator' => $request->operator,
            'jumlahPulsa' =>$jumlahPulsa,
            'hargaPulsa' =>$hargaPulsa,
            'kodeUnik' => $uniqueCode,
            'totalBayar' => (int)$hargaPulsa+$uniqueCode,
            'metodeBayar' => $request->metodeBayar,
            'accessCode' => $secretKey
        ]);
        // Add the general record to the database 
        TransactionController::add_general_transaction_info($trxCode,Auth::check() ? Auth::user()->username : 'anonim',$kindTrx,'',$request->hp,$hargaPulsa + $uniqueCode,$request->metodeBayar,$secretKey);
        // Mail the invoice to the email that has been inserted
        Mail::to($request->email)->send(new InvoiceMailer($kindTrx,$trxCode,'menunggu'));
        // return to the invoice page 
        return redirect()->route('invoice',[$kindTrx,$trxCode,$secretKey]);
    }
}
