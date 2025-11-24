<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');


Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');

