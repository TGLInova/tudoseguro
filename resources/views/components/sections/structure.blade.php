<x-ui::section {{ $attributes }}>
    <x-ui::container>
        <x-ui::h2 class="text-center mb-12">
            Conheça nossa história e nossa estrutura!
        </x-ui::h2>

        <div class="grid lg:grid-cols-2 grid-cols-1 gap-8">
            <div>
                <div class="rounded-xl h-80 overflow-hidden w-full relative flex items-center justify-center cursor-pointer"
                    x-data="{ play: false }" x-init="$watch('play', () => play ? $refs.video.play() : $refs.video.pause())" x-on:click="play = !play">
                    <a class="w-16 h-16 absolute block z-10" x-show="!play" x-transition>
                        <x-icon name="heroicon-m-play" class="animate-pulse text-white" />
                    </a>
                    <video src="https://videos.pexels.com/video-files/3205624/3205624-sd_640_360_25fps.mp4"
                        class="h-full w-full object-cover" x-ref="video" muted>
                </div>
            </div>
            <div>
                <x-ui::swiper
                    :pagination="true"
                    options="{
                        slidesPerView: 1,
                        spaceBetween: 24,
                        autoplay: false,
                        preventClicks: false,
                        preventClicksPropagation: false
                    }">
                    @foreach (['https://images.pexels.com/photos/27920699/pexels-photo-27920699/free-photo-of-mesa-balcao-escritorio-plantar.jpeg?auto=compress&cs=tinysrgb&w=600', 'https://images.pexels.com/photos/17107738/pexels-photo-17107738/free-photo-of-leve-luz-light-cidade.jpeg?auto=compress&cs=tinysrgb&w=600'] as $src)
                        <x-ui::swiper.item>
                            <div class="rounded-xl h-80 bg-neutral-300 overflow-hidden">
                                <img alt="Tudo Seguro" width="600" height="600" class="h-full w-full object-cover" src="{{ $src }}">
                            </div>
                        </x-ui::swiper.item>
                    @endforeach
                </x-ui::swiper>
            </div>
        </div>
    </x-ui::container>
</x-ui::section>
