<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('pages.beranda', compact('produks'));
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('pages.produk-detail', compact('produk'));
    }
}
