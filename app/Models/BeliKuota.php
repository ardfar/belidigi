<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeliKuota extends Model
{
    use HasFactory;
    protected $fillable = [
            'idTransaksi', 'nama', 'hp','email', 'operator', 'jenisKuota', 'kodeKuota', 'hargaKuota', 'detailKuota', 'kodeUnik', 'totalBayar', 'metodeBayar','accessCode','sebabTolak','fileBukti','creator'
    ];
}
