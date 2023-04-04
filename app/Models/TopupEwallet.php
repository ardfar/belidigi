<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopupEwallet extends Model
{
    use HasFactory;
    protected $fillable = [
        'idTransaksi','nama','hp','ewallet','nominalTopup','metodeBayar','totalBayar','kodeUnik','email','sebab','biayaAdmin','accessCode','sebabTolak','fileBukti','creator'
    ];
}
