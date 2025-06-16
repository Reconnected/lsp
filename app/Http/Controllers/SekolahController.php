<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sekolah;
use App\Models\Asesor;
use App\Models\Asesi;
use App\Models\Informasi;

class SekolahController extends Controller
{
    //

    public function amount(){

        $schools = Sekolah::where('is_universitas', false)->count();
        $universities = Sekolah::where('is_universitas', true)->count();
        $asesors = Asesor::count();
        $asesis = Asesi::count();
        $informations = Informasi::latest()->get();

        return view('home', compact('schools', 'universities', 'asesors', 'asesis', 'informations'));
    }

    public function show($slug){

        $information = Informasi::where('slug', $slug)->firstOrFail();

        return view('informasi.show', compact('information'));
    }
}