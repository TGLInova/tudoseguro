<x-ui::section variant="neutral" x-intersect.full:enter="enable = true" x-intersect.full:leave="enable = false"
    x-data="{ enable: false }">

    <x-ui::container>
        <div class="grid grid-cols-1 lg:grid-cols-6 gap-12 items-center"
            x-bind:class="{ '*:animate-fade-up': enable, 'opacity-0 duration-500': !enable }">
            <x-ui::h2 class="lg:col-span-2 max-lg:text-center">
                Descubra como <strong>podemos ajudar você</strong>!
            </x-ui::h2>
            <div class="lg:col-span-4 w-full">
                <x-ui::swiper
                    options="{ slidesPerView: 2, spaceBetween: 5, autoplay: true, preventClicks: false, breakpoints: { 800: { slidesPerView: 3.3, spaceBetween: 20 } }, }">
                    @foreach ($produtos as $produto)
                        <x-ui::swiper.item wire:key="produto-swiper-item-{{ $produto->id }}">
                            <x-ui.border-animated>
                                <x-produto.card :$produto />
                            </x-ui.border-animated>
                        </x-ui::swiper.item>
                    @endforeach
                    <x-ui::swiper.item>
                        <x-ui::card :href="route('produtos')"
                            class="flex-none flex flex-col w-full items-start justify-end space-y-4 h-72 duration-500 border-2 border-primary-200 hover:bg-white">
                            <x-icon name="icon-seguranca"
                                class="lg:w-10 lg:h-10 h-8 w-8 flex-none text-primary-200" />
                            <div class="text-2xl flex items-center">
                                Ver todas as soluções.
                            </div>
                        </x-ui::card>
                    </x-ui::swiper.item>
                </x-ui::swiper>
            </div>
        </div>
    </x-ui::container>
</x-ui::section>
