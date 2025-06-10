<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Download;

class DownloadController extends Controller
{
    //

    public function leafletFile(){

        $leaflets = Download::where('kategori', 'Leaflet')->latest()->get();

        return view('download', compact('leaflets'));
    }

    public function panduanFile(){

        $panduanFiles = Download::where('kategori', 'Panduan Uji Kompetensi')->latest()->get();

        return view('file.panduan', compact('panduanFiles'));

    }

    public function alurProses(){

        $alurProses = Download::where('kategori', 'Alur Proses Sertifikasi')->get();

        return view('file.alur', compact('alurProses'));

    }
}
