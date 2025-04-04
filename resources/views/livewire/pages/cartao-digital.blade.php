<div class="bg-primary grow">
    <x-ui::container>
        <x-ui::swiper data-id="{{ $colaborador?->id }}" options="{ initialSlide: {{ $index }}, slidesPerView: 1.2, spaceBetween: 40, centeredSlides: true, breakpoints: { 800: {slidesPerView: 4.12 } } }">
            @foreach ($colaboradores as $item)
                <x-ui::swiper.item data-id="{{ $item->id }}" class="py-32 relative">
                    <x-colaborador.card :colaborador="$item" class="group-[.swiper-slide-active]:scale-120 duration-500 scale-90" />
                </x-ui::swiper.item>
            @endforeach
        </x-ui::swiper>
    </x-ui::container>
</div>
