<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMailer;
use App\Models\BayarVirtual;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\GeneralPurchaseInfo;
use Illuminate\Http\Request;

class BayarVAController extends Controller
{
    // Return main page of Bayar Virtual Account when requested
    public function index()
    {
        return view('transaction.bayarVA');
    }

    // Main Brain of the transaction process 
    public function add(Request $request)
    {   
        // Create a lable of transaction 
        $kindTrx = 'bayar-virtual';
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
            if (!BayarVirtual::where("kodeUnik",$uniqueCode)->exists()){
                break;
            }
        }

        // Validate the request 
        $request->validate(
            // Request arguments checking 
            [
                'nama' => 'required|min:6',
                'email' => 'required|email',
                'hp' => 'nullable|min:10|numeric',
                'jenisVA' => 'required',
                'pemilikVA' => 'required',
                'noVA' => 'required|min:6|numeric',
                'jumlahBayar' => 'required|min:5|numeric',
                'metodeBayar' => 'required',
                'note' => 'nullable'
            ],
            // Custom error message
            [
                'nama.required' => 'Kami membutuhkan nama anda',
                'email.required' => 'Alamat email dibutuhkan',
                'jenisVA.required' => 'Bank Tujuan Dibutuhkan',
                'pemilikVA.required' => 'Nama pemilik akun virtual dibutuhkan',
                'noVA.required' => 'Nomor Rekening Tujuan diperlukan',
                'jumlahBayar.required' => 'Harap masukan jumlah yang akan ditransfer',
                'metodeBayar.required' => 'Harap pilih metode bayar'
            ]);

        // Create a record to database using BayarVirtual Model 
        BayarVirtual::create([
            'idTransaksi' => $trxCode,
            'nama' => $request->nama,
            'creator' => Auth::check() ? Auth::user()->username : '', // Add the usernname of account holder if logged in
            'email' => $request->email,
            'hp' => $request->hp,
            'jenisVA' => $request->jenisVA,
            'noVA' => $request->noVA,
            'pemilikVA' => $request->pemilikVA,
            'jumlahBayar' => $request->jumlahBayar,
            'kodeUnik' => $uniqueCode,
            'totalBayar' => $request->jumlahTransfer + $uniqueCode, //Sums up the nominal
            'metodeBayar' => $request->metodeBayar,
            'accessCode' => $secretKey,
            'note' => $request->note,
        ]);
        // Add the general record to the database 
        TransactionController::add_general_transaction_info($trxCode,Auth::check() ? Auth::user()->username : 'anonim',$kindTrx,$request->email,$request->hp,$request->jumlahBayar + $uniqueCode,$request->metodeBayar,$secretKey);
        // Mail the invoice to the email that has been inserted
        Mail::to($request->email)->send(new InvoiceMailer($kindTrx,$trxCode,'menunggu'));
        // return to the invoice page 
        return redirect()->route('invoice',[$kindTrx,$trxCode,$secretKey]);
    }
}
