<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerjasama;

class KerjasamaController extends Controller
{
    //

    public function index(){

        $partner = Kerjasama::latest()->get();
        $valuePartner = Kerjasama::where('is_value_partner', true)->latest()->get();
        $nonValuePartner = Kerjasama::where('is_value_partner', false)->latest()->get();

        return view('kerjasama', compact('partner','valuePartner','nonValuePartner'));
    }
}
