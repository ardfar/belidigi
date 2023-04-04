<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TransferBankMailer extends Mailable
{
    public $recentTrx;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($recentTrx)
    {
        $this->recentTrx = $recentTrx;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@aradenta.com')->view('dashboard.email.balasan')->subject('Menunggu pembayaran transaksi #'.$this->recentTrx->idTransaksi);
    }
}
