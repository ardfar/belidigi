<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerification extends Mailable
{
    public $status;
    public $username;
    public $dataUser;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username,$status)
    {
        $this->status = $status;
        $this->username = $username;
        $dataUser = User::where('username',$username)->first();
        $this->dataUser = $dataUser;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->status == 'WAITING'){
            $subject = 'Verifikasi Emailmu';
        }
        if ($this->status == 'VERIFIED'){
            $subject = 'Verifikasi Emailmu';
        }
        return $this->from('support@aradenta.com')->view('email.newUser')->subject($subject);
    }
}
