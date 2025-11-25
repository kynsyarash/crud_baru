<section class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-5">

        <div class="grid grid-cols-12 gap-8">
            @forelse ($artikels as $artikel)
                <a href="{{ route('artikel.show', $artikel->id) }}"
                   class="col-span-12 sm:col-span-6 xl:col-span-4 flex flex-col rounded-xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition">

                    <img 
                        src="{{ asset('storage/' . $artikel->path_img) }}" 
                        class="w-full h-56 object-cover"
                    >

                    <div class="p-5 flex flex-col space-y-3">
                        <h2 class="text-lg font-bold sm:text-xl leading-tight">
                            {{ $artikel->judul }}
                        </h2>

                        <p class="text-gray-600 text-sm line-clamp-3">
                            {{ $artikel->deskripsi }}
                        </p>

                        <a href="{{ route('artikel.show', $artikel->id) }}">Lihat selengkapnya</a>
                    </div>
                </a>
            @empty
                <p class="col-span-12 text-gray-500 text-center">Belum ada artikel tersedia.</p>
            @endforelse
        </div>

    </div>
</section>
