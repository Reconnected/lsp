<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_sekolah',
        'total_universitas',
        'total_asesor',
        'total_asesi',
        'lembaga_pelatihan'
    ];
}
