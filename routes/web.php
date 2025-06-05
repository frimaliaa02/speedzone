<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListProdukController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/listproduk', [ListProdukController::class, 'show'])->name('listproduk');
Route::post('/simpan-produk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::get('/produk/edit/{id}', [ListProdukController::class, 'edit'])->name('produk.edit');
Route::put('/produk/update/{id}', [ListProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/delete/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');