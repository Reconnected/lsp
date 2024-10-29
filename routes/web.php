<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// routes/web.php
use App\Http\Controllers\PageController;
use App\Http\Controllers\PesanController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'tentangKami'])->name('tentang.kami'); // Pastikan nama rutenya sesuai
Route::get('/informasi', [PageController::class, 'informasi'])->name('informasi');
Route::get('/vimi', [PageController::class, 'vimi'])->name('visi-misi');
// web.php
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/lsp', [PageController::class, 'lsp'])->name('pengurus-LSP');
Route::get('/asesor', [PageController::class, 'asesor'])->name('Asesor');
Route::get('/skema', [PageController::class, 'skema'])->name('Skema-Sertifikasi');
Route::get('/tempat', [PageController::class, 'tempat'])->name('tempat-uji');
Route::get('/informasi/profesi', [PageController::class, 'showProfesi'])->name('profesi');
Route::get('/informasi/bnsp', [PageController::class, 'bnsp'])->name('Badan-Nasional');
Route::get('/informasi/hukum', [PageController::class, 'hukum'])->name('Dasar-Hukum');
Route::get('/informasi/skill', [PageController::class, 'skill'])->name('Sertifikasi-Kompetensi');
Route::get('/kerjasama', [PageController::class, 'kerjasama'])->name('Kerja-Sama');
Route::get('/kontakkami', [PageController::class, 'kontakkami'])->name('Kontak-Kami');
Route::get('/skemainfo/office', [PageController::class, 'office'])->name('Junior-Office-Specialist');
Route::get('/skemainfo/mobile', [PageController::class, 'mobile'])->name('Junior-Mobile-Programmer');
Route::get('/skemainfo/web', [PageController::class, 'web'])->name('Junior-Web-Developer');

//proses

// Define a POST route for storing the pesan
Route::post('/pesans', [PesanController::class, 'store'])->name('pesans.store'); // Store new pesan
Route::get('/kontakkami', [PesanController::class, 'index'])->name('kontakkami');



?>
