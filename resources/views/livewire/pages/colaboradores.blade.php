<div>
    <x-ui::hero container-class="flex flex-col">
        <x-ui::container class="flex items-center gap-8 grow" x-bind:class="{ '*:animate-fade-up': enable }">
            <x-ui::h1>Conheça nossa equipe</x-ui::h1>
        </x-ui::container>
        <x-slot:image>
            <x-ui.hero-icon icon="icon-usuarios" />
        </x-slot>
    </x-ui::hero>

    @foreach ($grupoColaboradores as $grupo)
        <x-ui::section variant="neutral">
            <x-ui::container>
                <x-ui::h3 x-ref="h3" class="mb-6 font-semibold">{{ $grupo->nome }}:</x-ui::h3>
            </x-ui::container>
            <x-ui::swiper enable-helper
                options="{
                    slidesPerView: 1.15,
                    slidesOffsetBefore: 0,
                    spaceBetween: 20,
                    breakpoints: {
                        800: {
                            slidesPerView: 3,
                            spaceBetween: 40,
                            slidesOffsetBefore: $refs.h3.getBoundingClientRect().left,
                            autoplay: false,
                        }
                    }
                }">
                @foreach ($grupo->colaboradores as $colaborador)
                    <x-ui::swiper.item class="py-3">
                        <x-colaborador.business-card :$colaborador />
                    </x-ui::swiper.item>
                @endforeach
            </x-ui::swiper>
        </x-ui::section>
    @endforeach

    <x-contato.card />
</div>
