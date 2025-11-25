<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/produk/{id}', [ProdukController::class, 'showProduk'])->name('produk.show');
Route::get('/artikel/{id}', [ProdukController::class, 'showArtikel'])->name('artikel.show');

Route::get('/form/{id}', [ProdukController::class, 'showForm'])->name('produk.form');
Route::post('/form/{id}', [ProdukController::class, 'submitForm'])->name('produk.form.submit');