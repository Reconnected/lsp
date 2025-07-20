<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\InformasiServices;
use App\Services\PengalamanServices;

class HomeController extends Controller
{
    public function index(InformasiServices $informasiServices, PengalamanServices $pengalamanServices) {
        $pengalaman = $pengalamanServices->getFirstLatestData();
        $informations = $informasiServices->getAllData();

        return view('home', compact('pengalaman', 'informations'));
    }
}
