<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $table = 'pesan'; // Specify the table name if different
    protected $fillable = ['nama', 'email', 'alamat', 'no_telepon', 'pesan']; // Mass assignable
}
