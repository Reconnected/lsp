<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk halaman Home
    public function home()
    {
        return view('home');  // Mengarahkan ke view home.blade.php
    }

    // Method untuk halaman Tentang Kami
    public function tentangKami()
    {
        return view('tentangKami');  // Mengarahkan ke view tentangKami.blade.php
    }

    // Method untuk halaman Informasi
    public function informasi()
    {
        return view('informasi');  // Mengarahkan ke view informasi.blade.php
    }

    // Method untuk halaman visi misi
    public function vimi()
    {
        return view('vimi');
    }

    public function lsp()
    {
        return view('lsp');
    }
    
    public function asesor()
    {
        return view('asesor');
    }

    public function skema()
    {
        return view('skema');
    }

    public function tempat()
    {
        return view('tempat');
    }

    public function showProfesi()
    {
        return view('informasi.profesi');  // Mengarahkan ke file profesi.blade.php di folder informasi
    }

    public function bnsp()
    {
        return view('informasi.bnsp');  // Mengarahkan ke file profesi.blade.php di folder informasi
    }

    public function hukum()
    {
        return view('informasi.hukum');  // Mengarahkan ke file profesi.blade.php di folder informasi
    }

    public function skill()
    {
        return view('informasi.skill');  // Mengarahkan ke file profesi.blade.php di folder informasi
    }

    public function kerjasama()
    {
        return view('kerjasama');
    }

    public function kontakkami()
    {
        return view('kontakkami');
    }

     public function office()
    {
        return view('skemainfo.office'); // Mengarahkan ke view office.blade.php di folder skemainfo
    }

    public function mobile()
    {
        return view('skemainfo.mobile'); // Mengarahkan ke view mobile.blade.php di folder skemainfo
    }

    public function web()
    {
        return view('skemainfo.web'); // Mengarahkan ke view web.blade.php di folder skemainfo
    }


}

