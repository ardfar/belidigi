<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BayarVirtual extends Model
{
    use HasFactory;
    protected $fillable = [
        'idTransaksi','sudahBayar','statusProses','sebab','kodeUnik','nama','email','hp','jenisVA','noVA','pemilikVA','jumlahBayar','totalBayar','metodeBayar','accessCode','note','sebabTolak','fileBukti','creator'
    ];
}
