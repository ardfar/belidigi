<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMailer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\GeneralPurchaseInfo;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\HargaProduk;
use App\Models\JasaSosmed;
use Illuminate\Http\Request;

class BeliJasaSosmedController extends Controller
{
    // Return the main page 
    public function index()
    {
        return view('transaction.sosmed');
    }

    // Return the checkout form 
    public function form_to($group,$target)
    {
        return view('transaction.form.jasaSosmed',['group' => $group,'target' => $target]);
    }

    // Add the transaction record to the database via model 
    public function add(Request $request)
    {
        // Create a lable of transaction 
        $kindTrx = 'jasa-sosmed';
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
            // check if the code was exists 
            if (!JasaSosmed::where("kodeUnik",$uniqueCode)->exists()){
                break;
            }
        }
        // Check if a product is exist
        if (!HargaProduk::where('kodeProduk',$request->jenisLayanan)->exists()){
            Alert::error("Error", "Produk Tidak ditemukan");
            return redirect()->route("pulsa-kuota");
        }
        //Get product data 
        $tabelProduk = HargaProduk::where('kodeProduk',$request->jenisLayanan)->first();
        // Check product if its available 
        if ($tabelProduk->status != "ready"){
            Alert::error("Maaf", "Saat ini, produk yang kamu pilih sedang tidak tersedia");
            return redirect()->route("pulsa-kuota");
        }
        // extract product data from HargaProduk model
        $namaLayanan = $tabelProduk->deskripsiProduk;
        $hargaLayanan = $tabelProduk->hargaProduk;
        // Validate the request 
        $request->validate(
            // Validation rules
            [
                'nama' => 'required|min:6',
                'email' => 'required|email',
                'hp' => 'nullable|numeric|min:10',
                'username' => 'required',
                'platform' => 'required',
                'jenisLayanan' => 'required',
                'jumlahJasa' => 'required|numeric',
                'kustomKomentar' => 'nullable',
                'linkPost' => 'nullable',
                'metodeBayar' => 'required'
            ],
            // Custom validation message 
            [
                'nama.required' => 'Kami membutuhkan nama anda',
                'email.required' => 'Kami membutuhkan alamat email anda',
                'username.required' => 'Harap Masukan Username anda',
                'platform.required' => 'Harap pilih paket pada platform yang sesuai',
                'jenisLayanan.required' => 'Harap Pilih Jenis Layanan yang sesuai',
                'jumlahJasa.required' => 'Masukan jumlah Pesananan Jasa (minimal 1)',
                'jumlahJasa.numeric' => 'Harap masukan jumlah pesanan dengan angka',
                'metodeBayar.required' => 'Harap pilih metode bayar'
        ]);

        // Add record of the transaction to the database via model  
        JasaSosmed::create([
            'idTransaksi' => $trxCode,
            'nama' => $request->nama,
            'creator' => Auth::check() ? Auth::user()->username : '',
            'email' =>$request->email,
            'hp' => $request->hp,
            'username' => $request->username,
            'kodeProduk' => $request->jenisLayanan,
            'jenisLayanan' => $namaLayanan,
            'hargaLayanan' => $hargaLayanan,
            'jumlahJasa' => $request->jumlahJasa,
            'kustomKomentar'=> str_replace('\n',',',$request->kustomKomentar),
            'linkPost' => $request->linkPost,
            'kodeUnik' => $uniqueCode,
            'totalBayar' => ((int)$hargaLayanan*$request->jumlahJasa)+$uniqueCode,
            'metodeBayar' => $request->metodeBayar,
            'accessCode' => $secretKey
        ]);
        // Add the general record to the database 
        TransactionController::add_general_transaction_info($trxCode,Auth::check() ? Auth::user()->username : 'anonim',$kindTrx,$request->email,$request->hp,((int)$hargaLayanan*$request->jumlahJasa)+$uniqueCode,$request->metodeBayar,$secretKey);
        // Mail the invoice to the email that has been inserted
        Mail::to($request->email)->send(new InvoiceMailer($kindTrx,$trxCode,'menunggu'));
        // return to the invoice page 
        return redirect()->route('invoice',[$kindTrx,$trxCode,$secretKey]);
    }
}
