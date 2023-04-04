<?php

namespace App\Http\Controllers;

use App\Mail\InvoiceMailer;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\GeneralPurchaseInfo;
use App\Models\TopupEwallet;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class TopUpEWalletController extends Controller
{
    // Return the main page 
    public function index(){
        return view('transaction.topupWallet');
    }

    // Return the checkout form 
    public function form_to($target){
        return view('transaction.form.topupWallet',['target' => $target]);
    }

    // Add the transaction record to the database via model 
    public function add(Request $request)
    {
        // Create a lable of transaction 
        $kindTrx = 'topup-ewallet';
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
            if (!TopupEwallet::where("kodeUnik",$uniqueCode)->exists()){
                break;
            }
        }
        // Validate the request 
        $request->validate(
            // Validation rules
            [
                'nama' => 'required|min:6',
                'email' => 'required|email',
                'hp' => 'numeric|required',
                'ewallet' => 'required',
                'nominalTopup' => 'required|numeric',
                'metodeBayar' => 'required'
            ],
            // Custom validation message 
            [
                'nama.required' => 'Kami membutuhkan nama anda',
                'email.required' => 'Alamat Email Dibutuhkan untuk mengirim bukti transaksi',
                'hp.required' => 'Harap Masukan Nomor Telepon Anda',
                'nominalTopup' => 'Harap masukan nominal Top Up',
                'ewallet.required' => 'Harap pilih platform E-Wallet anda',
                'metodeBayar.required' => 'Harap pilih metode bayar'
        ]);
        // Add record of the transaction to the database via model  
        TopupEwallet::create([
            'idTransaksi' => $trxCode,
            'nama' => $request->nama,
            'biayaAdmin' => "1000",
            'creator' => Auth::check() ? Auth::user()->username : '',
            'email' =>$request->email,
            'hp' => $request->hp,
            'ewallet' =>$request->ewallet,
            'nominalTopup' => $request->nominalTopup,
            'kodeUnik' => $uniqueCode,
            'totalBayar' => (int)$request->nominalTopup+$uniqueCode,
            'metodeBayar' => $request->metodeBayar,
            'accessCode' => $secretKey,
        ]);
        // Add the general record to the database 
        TransactionController::add_general_transaction_info($trxCode,Auth::check() ? Auth::user()->username : 'anonim',$kindTrx,$request->email,$request->hp,(int)$request->nominalTopup+$uniqueCode,$request->metodeBayar,$secretKey);
        // Mail the invoice to the email that has been inserted
        Mail::to($request->email)->send((new InvoiceMailer($kindTrx,$trxCode,'menunggu')));
        // return to the invoice page 
        return redirect()->route('invoice',[$kindTrx,$trxCode,$secretKey]);
    }
}
