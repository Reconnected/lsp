<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengalaman;

class PengalamanController extends Controller
{
    public function showFirstData() {

        $pengalamans = Pengalaman::latest()->first();

        return view('home', compact('pengalamans'));
    }
}
