<?php

namespace App\Mail;

use App\Models\ResetRequest;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Str;
use Illuminate\Queue\SerializesModels;

class MailResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $username;
    public $key;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username)
    {
        $this->username = $username;
        $this->name = User::where("username",$username)->first()->name;
        $this->key = Str::random(Str::length($this->name))."-".Str::random(Str::length($this->username));
        ResetRequest::create([
            "username" => $username,
            "hash_key" => $this->key,
        ]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("support@aradenta.com")->view('email.reset')->subject("Permintaan Reset Password");
    }
}
