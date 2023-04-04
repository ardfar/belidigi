<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenMSG extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama','email','hp','pesan','idPesan','status'
    ];
}
