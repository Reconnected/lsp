<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesi extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'nama',
        'email',
        'no_telepon',
        'no_regis',
        'tgl_lahir',
        'status_kerja',
        'asal_instansi',
        'skemas_id',
    ];

    public function skemas(){
        return $this->belongsTo(Skema::class);
    }
}
