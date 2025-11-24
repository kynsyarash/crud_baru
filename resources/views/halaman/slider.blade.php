<section 
    x-data="{ 
        current: 0,
        images: [
            '/images/slide1.jpg',
            '/images/slide2.jpg',
            '/images/slide3.jpeg'
        ],
        autoplay() {
            setInterval(() => {
                this.current = (this.current + 1) % this.images.length;
            }, 4000);
        }
    }"
    x-init="autoplay()"
    class="relative w-full h-screen overflow-hidden"
>
    <template x-for="(img, index) in images" :key="index">
        <div 
            class="absolute inset-0 transition-opacity duration-1000 bg-cover bg-center"
            :style="'background-image: url(' + img + ');'"
            x-show="current === index"
            x-transition.opacity
        ></div>
    </template>

    <div class="absolute bottom-8 left-0 right-0 flex justify-center space-x-3">
        <template x-for="(img, index) in images">
            <div 
                class="w-3 h-3 rounded-full cursor-pointer"
                :class="current === index ? 'bg-white' : 'bg-white/40'"
                @click="current = index"
            ></div>
        </template>
    </div>
</section>
