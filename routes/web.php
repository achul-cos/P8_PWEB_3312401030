<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ListProdukController;

Route::get('/listproduk', [ListProdukController::class, 'show'])->name('produk.list');
Route::post('/listproduk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::delete('/listproduk/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');

// Tampilkan form edit
Route::get('/listproduk/{id}/edit', [ListProdukController::class, 'edit'])->name('produk.edit');

// Proses update
Route::put('/listproduk/{id}', [ListProdukController::class, 'update'])->name('produk.update');

Route::get('/', function () {
    return view('welcome');
});
