<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asesor;

class AsesorController extends Controller
{
    //

    public function index(){
        $asesor = Asesor::orderBy('name', 'asc')->get();

        return view('asesor', compact('asesor'));
    }
}
