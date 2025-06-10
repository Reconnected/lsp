<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tuk;

class TukController extends Controller
{
    //

    public function index(){
        $tuks = Tuk::latest()->get();

        return view('tempat', compact('tuks'));
    }
}
