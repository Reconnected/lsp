<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
use App\Services\InformasiServices;

class InformasiController extends Controller
{
    //

    public function index(InformasiServices $informasiServices){

        $informations = $informasiServices->getAllData();

        return view('informasi', compact('informations'));
    }

    public function show(InformasiServices $informasiServices ,string $slug){

        $informationSlug = $informasiServices->getDataBySlug($slug);

        return view('informasi.show', compact('informationSlug'));
    }
}
