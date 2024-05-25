<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BiayaController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('/barang/export-pdf', [BarangController::class, 'export_pdf'])->name('barang.export-pdf');
Route::resource('/barang', BarangController::class);

Route::resource('/biaya', BiayaController::class);
Route::resource('/kategori', KategoriController::class);