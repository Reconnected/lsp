<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;

class SekolahController extends Controller
{
    //

    public function amount(){

        $schools = Sekolah::where('is_universitas', false)->count();
        $universities = Sekolah::where('is_universitas', true)->count();

        return view('home', compact('schools', 'universities'));
    }
}
