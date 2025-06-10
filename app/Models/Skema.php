<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skema extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'nama_skema',
        'slug',
        'deskripsi_singkat',
        'deskripsi_skema',
        'persyaratan_pemohon',
        'unit_kompetensi',
    ];

    protected $casts = [
        'persyaratan_pemohon' => 'array',
        'unit_kompetensi' => 'array',
    ];


    public function asesi(){
        return $this->hasMany(Asesi::class);
    }
}
