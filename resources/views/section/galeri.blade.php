<section id="galeri" class="py-16">
    <div class="container mx-auto px-4" data-aos="fade-up">

        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold">Galeri</h2>
            <p class="text-gray-500">Berikut adalah beberapa dokumentasi kegiatan kami</p>
        </div>

        <div 
            x-data="{
                imageGalleryOpened: false,
                imageGalleryActiveUrl: null,
                imageGalleryImageIndex: null,
                imageGallery: [
                    @foreach ($produks as $index => $produk)
                    {
                        'photo': '{{ asset('storage/' . $produk->path_img) }}',
                        'alt': '{{ $produk->nama ?? 'Galeri ' . ($index + 1) }}'
                    }{{ $loop->last ? '' : ',' }}
                    @endforeach
                ],
                imageGalleryOpen(event) {
                    this.imageGalleryImageIndex = event.target.dataset.index;
                    this.imageGalleryActiveUrl = event.target.src;
                    this.imageGalleryOpened = true;
                },
                imageGalleryClose() {
                    this.imageGalleryOpened = false;
                    setTimeout(() => this.imageGalleryActiveUrl = null, 200);
                },
                imageGalleryNext(){
                    this.imageGalleryImageIndex =
                        (this.imageGalleryImageIndex == this.imageGallery.length)
                        ? 1
                        : (parseInt(this.imageGalleryImageIndex) + 1);
                    this.imageGalleryActiveUrl =
                        this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;
                },
                imageGalleryPrev() {
                    this.imageGalleryImageIndex =
                        (this.imageGalleryImageIndex == 1)
                        ? this.imageGallery.length
                        : (parseInt(this.imageGalleryImageIndex) - 1);
                    this.imageGalleryActiveUrl =
                        this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;
                }
            }"

            @image-gallery-next.window="imageGalleryNext()" 
            @image-gallery-prev.window="imageGalleryPrev()" 
            @keyup.right.window="imageGalleryNext()" 
            @keyup.left.window="imageGalleryPrev()"
        >

            <ul 
                x-ref="gallery"
                class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"
            >
                <template x-for="(image, index) in imageGallery">
                    <li class="overflow-hidden rounded-lg">
                        <img 
                            @click="imageGalleryOpen"
                            :src="image.photo"
                            :alt="image.alt"
                            :data-index="index+1"
                            class="w-full h-full object-cover rounded-lg cursor-pointer hover:opacity-90 transition"
                        >
                    </li>
                </template>
            </ul>

            <!-- Modal -->
            <template x-teleport="body">
                <div
                    x-show="imageGalleryOpened"
                    x-transition.opacity
                    @click="imageGalleryClose"
                    @keydown.window.escape="imageGalleryClose"
                    class="fixed inset-0 z-[100] bg-black/70 flex items-center justify-center p-4 cursor-zoom-out"
                    x-cloak
                >
                    <div class="relative max-w-4xl w-full h-[80vh] flex items-center justify-center">

                        <!-- Prev -->
                        <button
                            @click.stop="$dispatch('image-gallery-prev')"
                            class="absolute left-2 md:left-6 p-3 rounded-full bg-white/20 hover:bg-white/30 backdrop-blur text-white"
                        >
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19L8 12l7-7" />
                            </svg>
                        </button>

                        <!-- Image -->
                        <img
                            x-show="imageGalleryOpened"
                            x-transition.scale
                            :src="imageGalleryActiveUrl"
                            class="max-h-full max-w-full object-contain cursor-zoom-out"
                        >

                        <!-- Next -->
                        <button
                            @click.stop="$dispatch('image-gallery-next')"
                            class="absolute right-2 md:right-6 p-3 rounded-full bg-white/20 hover:bg-white/30 backdrop-blur text-white"
                        >
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                    </div>
                </div>
            </template>

        </div>
    </div>
</section>
