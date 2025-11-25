<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Models\Order;

class ProdukController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        $produks = Produk::all();
        return view('pages.beranda', compact('artikels', 'produks'));
    }

    public function showProduk($id)
    {
        $produk = Produk::findOrFail($id);
        return view('pages.produk-detail', compact('produk'));
    }

    public function showArtikel($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('pages.artikel-detail', compact('artikel'));
    }

    public function showForm($id)
    {
        $produk = Produk::findOrFail($id);
        return view('pages.form-detail', compact('produk'));
    }

    public function submitForm(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $validated = $request->validate([
            'nama_pembeli'      => 'required|string|max:255',
            'alamat'            => 'required|string|max:255',
            'no_telp'           => 'required|string|max:20',
            'deskripsi_kustom'  => 'nullable|string',
        ]);

        $validated['produk_id'] = $produk->id;

        Order::create($validated);

        return redirect()->route('produk.show', $produk->id)
            ->with('success', 'Pesanan berhasil dikirim!');
    }
}
