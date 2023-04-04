<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LisensiDigital extends Model
{
    use HasFactory;
    protected $fillable = [
        'idTransaksi','nama','hp','jenisLisensi','hargaLisensi','metodeBayar','totalBayar','kodeUnik','email','accessCode','kodeProduk','sebabTolak','kodeLisensi','creator'
    ];
}
