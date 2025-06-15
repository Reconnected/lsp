<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;
use App\Models\Asesor;
use App\Models\Asesi;

class SekolahController extends Controller
{
    //

    public function amount(){

        $schools = Sekolah::where('is_universitas', false)->count();
        $universities = Sekolah::where('is_universitas', true)->count();
        $asesors = Asesor::count();
        $asesis = Asesi::count();

        return view('home', compact('schools', 'universities', 'asesors', 'asesis'));
    }
}