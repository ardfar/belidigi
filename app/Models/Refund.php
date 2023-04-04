<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','idTransaksi','nama','platform','username','jenisTransaksi','nominalRefund','tanggalBayar','bankTujuan','noRek','fileBukti','pemilikRekening','sebab','idTerkait','statusProses','sebabTolak','accessCode','creator'
    ];
}
