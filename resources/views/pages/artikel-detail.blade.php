@extends('layouts.app')

@section('content')
<section class="bg-white py-12">
    <div class="max-w-4xl mx-auto px-5 space-y-10">

        <!-- Tombol kembali -->
        <a href="{{ route('produk.index') }}"
           class="inline-flex items-center text-sm text-gray-600 hover:text-indigo-600 transition">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
            </svg>
            Kembali
        </a>

        <!-- Judul -->
        <div class="space-y-3">
            <h1 class="text-3xl md:text-4xl font-bold leading-tight">
                {{ $artikel->judul }}
            </h1>

            <p class="text-gray-500 text-sm">
                {{ $artikel->created_at->translatedFormat('d F Y') }}
            </p>
        </div>

        <!-- Gambar utama -->
        <div>
            <img 
                src="{{ asset('storage/' . $artikel->path_img) }}"
                class="w-full rounded-xl shadow-sm object-cover max-h-[450px]"
            >
        </div>

        <!-- Konten -->
        <article class="prose prose-indigo max-w-none">
            {!! nl2br(e($artikel->deskripsi)) !!}
        </article>

    </div>
</section>
@endsection