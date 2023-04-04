<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\OpenMSG;
use App\Models\Emailsub;
use App\Models\GeneralPurchaseInfo;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class indexController extends Controller
{
    // return the contact page
    public function contact()
    {
        return view('contact');
    }

    // add the message to database 
    public function add_open_msg(Request $request)
    {
        // create the message code 
        $msgCode = 'pesan-'.Str::random(5);
        // validate the request 
        $request->validate(
            // validation rules 
            [
            'nama' => 'required|min:4',
            'email' => 'required|min:6|email',
            'hp' => 'required|min:12|numeric',
            'pesan' => 'required|min:16'
            ],
            // custom validation error message 
            [
                'nama.required' => 'Isi kolom nama dengan nama lengkap kamu',
                'email.required' => 'Email dibutuhkan untuk menghubungi-mu',
                'email.email' => 'Hanya masukan email pada kolom email',
                'hp.required' => 'Nomor telepon dibutuhkan untuk menghubungi-mu',
                'hp.numeric' => 'Kolom nomor telepon hanya boleh diisi dengan nomor',
                'pesan.required' => 'pesan dibutuhkan agar bisa disampaikan kepada tim'
            ]
        );
        // Add the message to database via model 
        OpenMSG::create([
            'idPesan' => $msgCode,
            'nama' => $request->nama,
            'email' => $request->email,
            'hp' => $request->hp,
            'pesan' => $request->pesan,
        ]);
        // Notify the user 
        Alert::success('Pesan Terkirim', 'Tim kami akan membalas pesan kamu secepatnya.');
        // redirect to contact page 
        return redirect()->route('kontak');
    }

    // show the membership page     
    public function memberIndex()
    {
        return view('membership');
    }


    // return the about page
    public function about()
    {
        return view('about');
    }

    // add inputed email to mailing list (UPCOMING FEATURE)
    public function add_email_sub(Request $request)
    {
        // validate the request 
        $request->validate(
            // validation rules 
            [
                'email' => 'required|min:6|email',
            ],
            // custom error message 
            [
                'email.required' => 'Email dibutuhkan untuk memberikan pembaharuan kepadamu',
            ]
        );

        // Add the email to mailing via model  
        Emailsub::create([
            'email' => $request->email,
        ]);
        // notify user 
        Alert::success('Berhasil', 'Terima kasih sudah mengikuti pembaruan kami');
        // return to the about page 
        return redirect()->route('tentang');
    }

    // return for transaction look up page with all general data
    public function cari_transaksi()
    {
        $data = [
            'generalPurchaseInfo'=> DB::table('general_purchase_infos')->orderByDesc('created_at')->paginate('10'),
        ];
        return view('search',$data);
    }

    // filter the general data based on user query
    public function search_transaction_data(Request $request)
    {
        $data = [
            'generalPurchaseInfo'=> DB::table('general_purchase_infos')->where('idTransaksi','like','%'.$request->searchQuery.'%')
                                                                        ->orWhere('email','like','%'.$request->searchQuery.'%')
                                                                        ->orWhere('hp','like','%'.$request->searchQuery.'%')
                                                                        ->paginate('10'),
        ];
        return view('search',$data);
    }

    // a function that will validate the security question to view full invoice page 
    public function authToView(Request $request)
    {
        // get general data 
        $dataInduk = GeneralPurchaseInfo::where('idTransaksi',$request->idTerkait)->first();
        // get detailed data 
        $dataTarget =  DB::table(str_replace('-','_',$dataInduk->jenisTransaksi).'s')->where('idTransaksi',$request->idTerkait)->first();
        // match the name from general and detailed data
        if (Str::upper($dataTarget->nama) == Str::upper($request->realName)){
            // extract the data 
            $kindTrx =$dataTarget->jenisTransaksi;
            $trxCode = $dataTarget->idTransaksi;
            $secretKey = $dataTarget->accessCode;
            // return to the invoice 
            return redirect()->route('invoice',[$kindTrx,$trxCode,$secretKey]);
        } else {
            // bail out 
            return redirect()->route('cari-transaksi')->with('message','Nama yang dimasukan tidak sesuai dengan data transaksi terkait');
        }
    }
}