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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route Dasar 
Route::get('/', function () {
    return 'Hello Cantik';
});

//Route dengan view
Route::get('/dashboard', function () {
    return view('dashboard');
});

//Route dengan parameter
Route::get('/user/{iksan}', function ($nama) {
    return "Halo, $nama!";
});

//Route dengan parameter opsional
/*Route::get('/produk/{id?}', function ($id = null) {
 return $id ? "Produk ID: $id" : "Tidak ada ID produk";
});*/

//Route dengan Regular Expression
Route::get('/kategori/{nama}', function ($nama) {
    return "Kategori: $nama";
})->where('nama', '[A-Za-z]+');

//Route dengan nama
Route::get('/profil', function () {
    return 'Ini halaman profil';
})->name('profil');

Route::get('/link-profil', function () {
    return route('profil');
});

//Route ke Controller
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index']);

//Route Resource ke Controller
use App\Http\Controllers\ProdukController;

Route::resource('produk', ProdukController::class);

// Route resource untuk Provinsi (CRUD)
use App\Http\Controllers\ProvinsiController;

Route::resource('provinsi', ProvinsiController::class);

//Route group (middleware & prefix)
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Halaman Dashboard Admin';
    });
    Route::get('/laporan', function () {
        return 'Halaman Laporan Admin';
    });
});

//Route Fallback
Route::fallback(function () {
    return 'Halaman tidak ditemukan';
});

//Route ke Controller KataBijak
use App\Http\Controllers\KataBijakController;

Route::get('kata-bijak/kata', [KataBijakController::class, 'kata']);

Route::get(
    'kata-bijak/pepatah',
    [KataBijakController::class, 'pepatah']
)->name('kataPepatah');

//Route Resource ke Controller Barang
use App\Http\Controllers\BarangController;

Route::resource('barang', BarangController::class);

//Route ke Controller Elo
use App\Http\Controllers\EloController;

Route::get('elo/bacaAll', [EloController::class, 'bacaAll']);
Route::get('elo/bacaAllRelasi', [EloController::class, 'bacaAllRelasi']);
Route::get('elo/bacaSatu', [EloController::class, 'bacaSatu']);
Route::get('elo/bacaPilih', [EloController::class, 'bacaPilih']);
Route::get('elo/tambahKota', [EloController::class, 'tambahKota'])->name('kota.tambahKota');