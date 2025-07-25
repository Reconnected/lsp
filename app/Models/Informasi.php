<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'sumber',
        'tgl_publish',
        'konten_informasi',
        'image',
    ];

    protected $casts = [
        'tgl_publish' => 'date:d-m-Y'
    ];
}
