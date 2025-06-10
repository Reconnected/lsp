<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;

class InformasiController extends Controller
{
    //

    public function index(){

        $informations = Informasi::latest()->get();

        return view('informasi', compact('informations'));
    }

    public function show($slug){

        $information = Informasi::where('slug', $slug)->firstOrFail();

        return view('informasi.show', compact('information'));
    }
}
