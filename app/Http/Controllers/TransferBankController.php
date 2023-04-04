<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMailer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\GeneralPurchaseInfo;
use App\Models\TransferBank;
use Illuminate\Http\Request;

class TransferBankController extends Controller
{
    // Return the page of transfer bank when it's asked 
    public function index()
    {
        return view('transaction.transfer');
    }

    // Main mechanism to process the transaction of Transfer Bank  
    public function add(Request $request)
    {
        // Create a label to KindTransaction to database column 
        $kindTrx = 'transfer-bank';
        // Create an unique code of transaction
        while (true){
            $trxCode = Str::random(10);
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
        // Create unique code of 3 digit of integer 
        while (true){
            $uniqueCode = rand(100,999);
            if (!TransferBank::where("kodeUnik",$uniqueCode)->exists()){
                break;
            }
        }
        // Validate the request with some customized message
        $request->validate(
            [
                'nama' => 'required|min:6',
                'email' => 'required|email',
                'hp' => 'nullable|min:10|numeric',
                'bankTujuan' => 'required',
                'rekTujuan' => 'required|min:6|numeric',
                'pemilikTujuan' => 'required|min:4',
                'jumlahTransfer' => 'required|min:5|numeric',
                'metodeBayar' => 'required',
                'note' => 'nullable|max:50'
            ],
            [
                'nama.required' => 'Kami membutuhkan nama anda',
                'email.email' => 'Harap masukan alamat email yang benar',
                'hp.required' => 'Nomor telepon dibutuhkan',
                'bankTujuan.required' => 'Bank Tujuan Dibutuhkan',
                'rekTujuan.required' => 'Nomor Rekening Tujuan diperlukan',
                'pemilikTujuan.required' => 'Nama pemilik rekening tujuan dibutuhkan',
                'jumlahTransfer.required' => 'Harap masukan jumlah yang akan ditransfer',
                'metodeBayar.required' => 'Harap pilih metode bayar'
            ]);
        // Create a record to database using the created model 
        TransferBank::create([
            'idTransaksi' => $trxCode,
            'nama' => $request->nama,
            'creator' => Auth::check() ? Auth::user()->username : '', // Add the usernname of account holder if logged in
            'email' => $request->email,
            'hp' => $request->hp,
            'bankTujuan' => $request->bankTujuan,
            'rekTujuan' => $request->rekTujuan,
            'pemilikTujuan' => $request->pemilikTujuan,
            'jumlahTransfer' => $request->jumlahTransfer,
            'kodeUnik' => $uniqueCode,
            'totalBayar' => $request->jumlahTransfer + $uniqueCode + TransactionController::get_admin_fee(), //Sums up the nominal
            'metodeBayar' => $request->metodeBayar,
            'accessCode' => $secretKey,
            'note' => $request->note
        ]);
        // Add the general record to the database  
        TransactionController::add_general_transaction_info($trxCode,Auth::check() ? Auth::user()->username : 'anonim',$kindTrx,$request->email,$request->hp,$request->jumlahTransfer + $uniqueCode + 500,$request->metodeBayar,$secretKey);
        // Mail the invoice to the email that has been inserted 
        Mail::to($request->email)->send(new invoiceMailer($kindTrx,$trxCode,'menunggu'));
        // return to the invoice page 
        return redirect()->route('invoice',[$kindTrx,$trxCode,$secretKey]);
    }
}
