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
use App\Http\Controllers\AsesorController;
use App\Http\Controllers\TukController;
use App\Http\Controllers\KerjasamaController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\SkemaController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\HomeController;


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang-kami', [PageController::class, 'tentangKami'])->name('tentang.kami'); // Pastikan nama rutenya sesuai
Route::get('/informasi', [PageController::class, 'informasi'])->name('informasi');
Route::get('/vimi', [PageController::class, 'vimi'])->name('visi-misi');
// web.php
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/lsp', [PageController::class, 'lsp'])->name('pengurus-LSP');
// Route::get('/skema', [PageController::class, 'skema'])->name('Skema-Sertifikasi');
Route::get('/informasi/profesi', [PageController::class, 'showProfesi'])->name('profesi');
Route::get('/informasi/bnsp', [PageController::class, 'bnsp'])->name('Badan-Nasional');
Route::get('/informasi/hukum', [PageController::class, 'hukum'])->name('Dasar-Hukum');
Route::get('/informasi/skill', [PageController::class, 'skill'])->name('Sertifikasi-Kompetensi');
Route::get('/kontakkami', [PageController::class, 'kontakkami'])->name('Kontak-Kami');
Route::get('/skemainfo/office', [PageController::class, 'office'])->name('Junior-Office-Specialist');
Route::get('/skemainfo/mobile', [PageController::class, 'mobile'])->name('Junior-Mobile-Programmer');
Route::get('/skemainfo/web', [PageController::class, 'web'])->name('Junior-Web-Developer');
Route::get('/skemainfo/designer', [PageController::class, 'designer'])->name('Junior-Graphic-Designer');
Route::get('/skemainfo/motion', [PageController::class, 'motion'])->name('Motion-Graphic-Artist');
Route::get('/skemainfo/administrator', [PageController::class, 'administrator'])->name('Junior-Network-Administrator');
Route::get('/skemainfo/teknisi', [PageController::class, 'teknisi'])->name('Teknisi-Utama-Jaringan-Komputer');
// Route::get('/download', [PageController::class, 'download'])->name('File-Download');
// Route::get('/file/alur', [PageController::class, 'alur'])->name('Alur-Proses');
// Route::get('/file/panduan', [PageController::class, 'panduan'])->name('Panduan');

//proses

// Define a POST route for storing the pesan
Route::post('/pesans', [PesanController::class, 'store'])->name('pesans.store'); // Store new pesan
Route::get('/kontakkami', [PesanController::class, 'index'])->name('kontakkami');

//Define a Asesor route for storing the asesor
Route::get('/asesor', [AsesorController::class, 'index'])->name('Asesor');
// Route::get('/home', [AsesorController::class, 'amount'])->name('Asesor-Amount');
// Route::get('/', [AsesorController::class, 'amount'])->name('Asesor-Amount');

//Define a Tempat route for storing the TUK
Route::get('/tempat', [TukController::class, 'index'])->name('tempat-uji');

// Define a Kerjasama route for storing the partner
Route::get('/kerjasama', [KerjasamaController::class, 'index'])->name('Kerja-Sama');

// Define a Home route for storing the amount of Sekolah and Universitas
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Define a Home route for storing the first data of experience
// Route::get('/', [PengalamanController::class, 'showFirstData'])->name('home');
// Route::get('/home', [PengalamanController::class, 'showFirstData'])->name('home');

// Define a Informasi route for storing the amount of informasi artikel
Route::get('/informasi', [InformasiController::class, 'index'])->name('informasi');
Route::get('/informasi/{slug}', [InformasiController::class, 'show'])->name('informasi.show');

Route::get('/download', [DownloadController::class, 'leafletFile'])->name('File-Download');
Route::get('/file/panduan', [DownloadController::class, 'panduanFile'])->name('Panduan');
Route::get('/file/alur', [DownloadController::class, 'alurProses'])->name('Alur-Proses');

Route::get('/skema', [SkemaController::class, 'index'])->name('Skema-Sertifikasi');
Route::get('/skema/{slug}', [SkemaController::class, 'show'])->name('skema.show');


?>
