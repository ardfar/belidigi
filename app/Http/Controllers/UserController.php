<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\GeneralPurchaseInfo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use App\Mail\EmailVerification;
use App\Mail\MailResetPassword;
use App\Models\ResetRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    // Show Login page 
    public function login()
    {
        if (Auth::check()){
            return redirect()->route('/'); // Redirect to main page if user already logged in
        } else {
            return view('login'); // Redirect to login page to unlogged user
        }
    }

    // Login handler 
    public function loginAttempt(Request $request)
    {
        // Extract the data from the request 
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        
        // Attemt the auth by passing the data 
        if (Auth::attempt($data)){
            // get user data 
            $temp = User::where('username',$data['username'])->first();
            // Check if email of the account is already verified 
            if (!$temp->isVerified == 0){
                // Redirect regenerate the session 
                $request->session()->regenerate();
                return redirect()->route('/');
            } else {
                // Else, Flush all registered session data 
                Session::flush();
                Auth::logout();
                Alert::error('Oops!','Harap verifikasikan email-mu terlebih dahulu');
                return redirect()->route('login');
            }
        } else{
            // if user data not exists, bail out 
            return redirect()->route('login')->with('message','Login gagal, Cek kembali Email dan Password-mu');
        }
    }

    // Logout handler 
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }

    // Return the signup page 
    public function signup(){
        if (Auth::check()){
            if (Auth::user()->role == 'admin'){
                return redirect()->route('dashboard'); // Redirect to dashboard
            } else {
                return redirect()->route('/'); // redirect to main page
            }
        } else {
            return view('signup'); // Redirect to signup page
        }
    }

    // registration handler 
    public function add(Request $request)
    {
        // validate the request
        $request->validate(
        // Validation rules 
        [
            'username' => 'required|unique:users,username',
            'nama' => 'required',
            'email' => 'required|email|unique:users,email',
            'hp' => 'required|numeric|min:10|unique:users,hp',
            'password' => 'required|min:8',
        ],
        // Custom validation error message 
        [
            'username.required' => 'Username dibutuhkan',
            'username.unique' => 'Username Telah digunakan, harap gunakan username lain',
            'nama.required' => 'Nama atau alias dibutuhkan',
            'email.required' => 'Alamat Email dibutuhkan',
            'email.email' => 'Harap masukan alamat email valid',
            'email.unique' => 'Email sudah digunakan, harap gunakan email lain.',
            'hp.required' => 'Nomor HP yang terhubung Whatsapp dibutuhkan',
            'hp.numeric' => 'Harap tulis Nomor HP tanpa kode daerah atau negara',
            'hp.unique' => 'Nomor HP sudah digunakan, harap gunakan nomor HP lain',
            'password.required' => 'Password dibutuhkan'
        ]);
        // Create the user record 
        User::create([
            'username' => $request->username,
            'name' => $request->nama,
            'email' => $request->email,
            'hp' => $request->hp,
            'password' => Hash::make($request->password)
        ]);
        // Mail the confirmation link 
        Mail::to($request->email)->send(new EmailVerification($request->username,'WAITING'));
        // Send succcess Alert to front 
        Alert::success('Berhasil','Akun berhasil dibuat, silahkan cek kontak masuk atau spam email-mu untuk verifikasi email');
        // Redirect to login page 
        return redirect()->route('login');
    }

    // Handle email verification 
    public function email_verify($username){
        // get user data 
        $data = User::where('username',$username)->first();
        // Check if email was verified 
        if ($data->isVerified == 0){
            // Verify the email 
            User::where('username',$username)->update(['isVerified' => 1, 'email_verified_at' => Carbon::now()]);
            Alert::success("berhasil","Email Berhasil Diverifikasi, kamu bisa login sekarang");
        } else {
            // Fire error dialog (EMAIL HAS BEEN VERIFIED)
            Alert::error('Oops!','Emailmu sudah terverifikasi');
        }
        // redirect to login page 
        return redirect()->route('login');
    }

    // return reset password request form
    public function reset_page()
    {
        return view("reset");
    }

    // Handle the form of reset password request and send the reset link to the user's email
    public function send_reset_link(Request $request)
    {
        // Validate the request 
        $request->validate(
            // Validation rules 
            [
                "email" => "email|required",
                "username" => "required",
            ],
            // Validation custom error message
            [
                "email.required" => "Alamat emailmu dibutuhkan",
                "username.required" => "Usernamemu dibutuhkan",
                "email.email" => "Alamat emailmu tidak valid"
            ]
        );

        // Check if account with given email and username is exists
        if (User::where(["email" => $request->email,"username" => $request->username])->exists()){
            // Send the email with link 
            Mail::to($request->email)->send(new MailResetPassword($request->username));
            // Notify user  
            Alert::success("Berhasil","Cek emailmu di inbox atau spam dan klik link yang ada");
            // Redirect to reset page 
            return redirect()->route("reset");
        } else {
            // Bail out
            Alert::error("Gagal", "Akunmu tidak ditemukan, cek kembali email dan usernamemu");
            // Redirect to reset page 
            return redirect()->route("reset");
        }
    }

    // Handle the confirmation link form email 
    public function reset_link_confirm($hash_key)
    {
        // check if the hash is exists 
        if (ResetRequest::where("hash_key", $hash_key)->exists()){
            // put the hash key to the session 
            Session::put("key",$hash_key);
            // put the username to the session 
            Session::put("username",ResetRequest::where("hash_key", $hash_key)->first()->username);
            // redirect to create new password form 
            return redirect()->route("new_password_form");
        } else {
            // hash was deleted, Bail out
            Alert::error("Gagal","Token reset password sudah tidak berlaku");
            return redirect()->route("reset");
        }
    }

    // Return the create new password form 
    public function new_password_form()
    {
        return view("repassword");
    }

    // Handle the password update 
    public function update_new_password(Request $request)
    {
        // validate the request 
        $request->validate(
            // validation rules 
            [
                "password" => "required",
                "repassword" => "required",
                "hash" => "required"
            ],
            // custom validation error message 
            [
                "password.required" => "Harap buat password",
                "repassword.required" => "Harap ketik ulang password",
                "hash.required" => "Token tidak ada, harap klik ulang link yang ada di email",
            ]
        );

        // get the username based on the hash 
        $username = ResetRequest::where("hash_key", $request->hash)->first()->username;

        // Update the password 
        User::where("username",$username)->update([
            "password" => Hash::make($request->password) // Hash the request 
        ]);
        
        // Delete the hash from database 
        ResetRequest::where("hash_key", Session::get("key"))->delete();
        // clear the session key : key, username 
        Session::forget(["key","username"]);

        // Notify user 
        Alert::success("Berhasil", "Password-mu sudah diperbaharui");
        // return to login 
        return redirect()->route('login');
    }


    // Return user profile page
    public function index()
    {   
        // Check if the profile photo is exist 
        if (File::exists('storage/images/user-profile/'.Auth::user()->username.'.jpg')){
            $img_link = asset('storage/images/user-profile/'.Auth::user()->username.'.jpg');
        } else {
            $img_link = asset('storage/images/user-profile/'.Auth::user()->username.'.png');
        }
        // Send data to the front 
        $data = [
            'pp_link' => $img_link,
            'generalPurchaseInfo'=> GeneralPurchaseInfo::where('creator',Auth::user()->username)->orderByDesc('created_at')->paginate(5),
        ];
        // Return the page 
        return view('user.profile',$data);
    }

    // show page of transaction history
    public function riwayat_transaksi()
    {
        $data = [
            'generalPurchaseInfo'=> GeneralPurchaseInfo::where('creator',Auth::user()->username)->orderByDesc('created_at')->paginate('15'),
        ];
        return view('history',$data);
    }
    // filter the transaction history
    public function history_search_transaction_data(Request $request)
    {
        $data = [
            'generalPurchaseInfo'=> GeneralPurchaseInfo::where('idTransaksi','like','%'.$request->searchQuery.'%')->orWhere('email','like','%'.$request->searchQuery.'%')->orWhere('hp','like','%'.$request->searchQuery.'%')->paginate('10'),
        ];
        return view('history',$data);
    }

    // Handle update user data 
    public function change_user_data(Request $request)
    {
        // validate the request 
        $request->validate(
            // Validation rules 
            [
            'email' => 'email|required',
            'hp' => 'numeric|min:11|required',
            ],
            // Custom validation error message 
            [
            'email.email' => "Email valid tidak terdeteksi, pastikan kamu menuliskan alamat emailmu, bukan yang lain",
            'email.required' => "Harap tuliskan emailmu",
            'hp.min' => "Masukan nomor teleponmu minimal 11 nomor",
            'hp.numeric' => "Harap tuliskan nomor telepon, bukan yang lain",
            'hp.required' => "Harap tuliskan nomor teleponmu",
        ]);
        // Check if email is being used by another account 
        if (Auth::user()->email != $request->email){
            if (User::where("email",$request->email)->count() == 1){
                Alert::error("Gagal","Emailmu digunakan oleh akun lain");
                return redirect()->route('user-profile');
            }
        }
        // Check if phone number is being used by another account 
        if (Auth::user()->hp != $request->hp){
            if (User::where("hp",$request->hp)->count() == 1){
                Alert::error("Gagal","No. HP-mu digunakan oleh akun lain");
                return redirect()->route('user-profile');
            }
        }
        // update the user's record 
        User::where('username', Auth::user()->username)->update(['hp' => $request->hp, 'email' => $request->email]);
        // Notify user 
        Alert::success('Berhasil', 'Email dan nomor teleponmu berhasil diperbaharui');
        // Redirect to profile page 
        return redirect()->route('user-profile');
    }

    // Handler to change user photo profile 
    public function change_user_profile_photo(Request $request)
    {
        // Check the file existence first
        // If exists, remove the old one
        if (Storage::disk('public')->exists('images/user-profile/'.Auth::user()->username.'.jpg') or Storage::disk('public')->exists('images/user-profile/'.Auth::user()->username.'.png')){
            Storage::delete('public/images/user-profile/'.Auth::user()->username.'.jpg');
            Storage::delete('public/images/user-profile/'.Auth::user()->username.'.png');
        }
        // Get the uploaded file 
        $fileToUp = $request->file('foto-profil');
        // get file extension 
        $fileExtension = '.'.$fileToUp->getClientOriginalExtension();
        // Store the file to the server 
        if ($request->file('foto-profil')->storeAs('images/user-profile/', Auth::user()->username.$fileExtension , 'public' )){
            Alert::success('Berhasil','Foto profilmu sukses diubah'); // Notify user if operation was successful
        } else {
            Alert::error('Oops!','Foto profilmu gagal diubah'); // Notify user if something went wrong
        }
        // return to the profile page 
        return redirect()->route('user-profile');
    }
}
