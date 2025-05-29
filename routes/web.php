<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/listproduk', [ListProdukController::class, 'show']);
Route::post('/simpan-produk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
