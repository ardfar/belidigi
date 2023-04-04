<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeliPulsa extends Model
{
    use HasFactory;
    protected $fillable =[
        'idTransaksi','nama','hp','email','jumlahPulsa','hargaPulsa','metodeBayar','operator','totalBayar','kodeUnik','accessCode','sebabTolak','fileBukti','creator'
    ];
}
