@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto mt-20 px-6">

    <div class="flex flex-col md:flex-row gap-10">

        <!-- Gambar -->
        <div class="w-full md:w-1/2">
            <img src="{{ Storage::url($produk->path_img) }}" class="w-full object-contain">
        </div>

        <!-- Detail -->
        <div class="w-full md:w-1/2">
            <h1 class="text-3xl font-semibold text-[#354024]">
                {{ $produk->nama_produk }}
            </h1>

            <p class="mt-4 text-lg text-gray-600">
                {{ $produk->deskripsi }}
            </p>

            <div class="mt-6 text-3xl font-bold text-[#354024]">
                Rp. {{ number_format($produk->harga, 0, ',', '.') }}
            </div>

            <a href="/produk" class="inline-block mt-6 px-6 py-2 bg-[#354024] text-white rounded-xl">
                Kembali
            </a>
        </div>

    </div>

</div>

@endsection
