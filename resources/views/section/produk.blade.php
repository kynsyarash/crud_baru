<section id="produk" class="w-full antialiased bg-white pb-20">

    <div class="max-w-7xl mx-auto px-6 mt-16">

        <h2 class="text-3xl font-semibold text-[#354024] mb-10 text-center">
            Produk Kami
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

            @foreach ($produks as $produk)
                <div class="bg-[#e9dfc7] rounded-2xl shadow-sm p-6 flex flex-col items-center">

                    <div class="w-full h-64 flex justify-center items-center">
                        <img src="{{ Storage::url($produk->path_img) }}" alt="{{ $produk->nama_produk }}"
                            class="h-full object-contain">
                    </div>

                    <h3 class="mt-6 text-xl font-semibold text-center text-[#354024]">
                        {{ $produk->nama_produk }}
                    </h3>

                    <div class="mt-4 bg-white shadow px-4 py-2 rounded-full text-center font-semibold text-[#354024]">
                        <a href="{{ route('produk.show', $produk->id) }}"
                            class="mt-4 bg-white shadow px-4 py-2 rounded-full text-center font-semibold text-[#354024] hover:bg-gray-100 transition">
                            Rp. {{ number_format($produk->harga, 0, ',', '.') }}
                        </a>

                    </div>

                </div>
            @endforeach

        </div>

    </div>

</section>
