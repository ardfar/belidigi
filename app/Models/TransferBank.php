<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferBank extends Model
{
    use HasFactory;
    protected $fillable = [
        'idTransaksi','sudahBayar','statusProses','sebab','kodeUnik','nama','email','hp','bankTujuan','rekTujuan','pemilikTujuan','jumlahTransfer','totalBayar','metodeBayar','accessCode','note','sebabTolak','fileBukti','creator'
    ];
}
