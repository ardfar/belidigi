<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OpenMSGMailer extends Mailable
{
    public $subject;
    public $oldMSG;
    public $content;
    public $sapaan;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$sapaan,$oldMSG,$content)
    {
        $this->subject = $subject;
        $this->sapaan = $sapaan;
        $this->oldMSG = $oldMSG;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@aradenta.com')->view('email.balasan')->subject($this->subject);
    }
}
