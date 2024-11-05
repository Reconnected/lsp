<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class PesanController extends Controller
{
    // Show the form to create a new pesan
    public function create()
    {
        return view('pesans.create');
    }

    // Store the new pesan
    public function store(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email|unique:pesan,email',
            'alamat' => 'required|string',
            'no_telepon' => 'required|string', // Add validation for phone number
            'pesan' => 'required|string',
        ]);

        // Create a new pesan instance
        Pesan::create($validatedData);

        // Redirect to the Kontak Kami page with success message
        return redirect()->route('kontakkami')->with('success', 'Pesan created successfully!');
    }

    // Show all pesans
    public function index()
    {
        $pesans = Pesan::all();
        return view('kontakkami', compact('pesans'));
    }
}
