<x-ui::section variant="neutral">
    <x-ui::container>
        <div class="grid lg:grid-cols-5 items-center">
            <div class="lg:col-span-3">
                <header @class(['flex flex-col mb-10'])>
                    <x-ui::h2 class="font-bold text-primary-600">Fale com nosso time de especialistas!</x-ui::h2>
                    <p @class([$subtitleOnTop ? 'order-first' : ''])>{!! $subtitle !!}</p>
                </header>

                @livewire('components.formulario-contato')
            </div>
            <a class="lg:col-span-2 text-primary-500 hover:text-primary-200 duration-300" title="Fale conosco através do Whatsapp" href="{{ $whatsapp }}" target="_blank" rel="noopener nofollow">
                <x-icon name="icon-whatsapp-with-layers" />
            </a>
        </div>
    </x-ui::container>
</x-ui::section>
