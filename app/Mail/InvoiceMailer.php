<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class InvoiceMailer extends Mailable
{
    public $kind;
    public $id;
    public $type;
    public $recentTrx;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($kind,$id,$type)
    {
        $this->kind = $kind;
        $this->id = $id;
        $this->type = $type;
        $data = DB::table(str_replace('-','_',$kind).'s')->where('idTransaksi',$id)->first();
        $this->recentTrx = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->type == 'menunggu'){
            $subject = 'Menunggu Pembayaran Transaksi #'.$this->id;
        } elseif ($this->type == 'proses'){
            $subject = 'Pembayaran Transaksi #'.$this->id.' Telah Terverifikasi';
        } elseif ($this->type == 'berhasil'){
            $subject = 'Transaksi #'.$this->id.' Berhasil Diproses';
        } elseif ($this->type == 'batal'){
            $subject = 'Transaksi #'.$this->id.' Telah Dibatalkan';
        } else {
            $subject = 'Transaksi #'.$this->id.' Telah Dibatalkan Oleh Admin';
        }
        if (($this->kind == 'transfer-bank' or $this->kind == 'bayar-virtual') and $this->type == 'berhasil'){
            return $this->from('support@aradenta.com')->view('email.transaksi')->text('email.transaksi_plain')->attach(public_path('storage/struk/transfer/struk-'.$this->id.'.png'))->subject($subject);
        } else {
            return $this->from('support@aradenta.com')->view('email.transaksi')->text('email.transaksi_plain')->subject($subject);
        }
    }
}
