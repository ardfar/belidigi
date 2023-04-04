<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JasaSosmed extends Model
{
    use HasFactory;
    protected $fillable = [
        'idTransaksi','nama','username','email','jenisLayanan','hargaLayanan','jumlahJasa','totalBayar','metodeBayar','kodeUnik','sebab','linkPost','kustomKomentar','accessCode','kodeProduk','sebabTolak','creator'
    ];
}
