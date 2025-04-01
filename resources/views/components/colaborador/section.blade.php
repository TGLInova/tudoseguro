<x-ui::section class="text-center space-y-12">
    <x-ui::h2 class="text-center">{{ $titulo ?? 'Conheça nossa equipe de especialistas' }}</x-ui::h2>
    <x-ui::container>
        <x-ui::swiper :navigation="true" options="{ slidesPerView: 2, spaceBetween: 16, breakpoints: { 800: {slidesPerView: 4.12 } } }">
            @foreach ($colaboradores as $colaborador)
                <x-ui::swiper.item data-key="{{ $colaborador->id }}">
                    <x-colaborador.card :$colaborador />
                </x-ui::swiper.item>
            @endforeach
        </x-ui::swiper>
    </x-ui::container>
    @if($verMais)
    <x-ui::button variant="primary" :href="route('colaboradores')" wire:navigate>
        Conhecer toda a nossa equipe
    </x-ui::button>
    @endif
</x-ui::section>
