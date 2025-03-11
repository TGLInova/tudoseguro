<div>
    <x-ui::hero :image="$produto->imagem?->url ?? null" container-class="flex flex-col">
        @if($produto->icone)
        <x-slot:image>
            <x-icon :name="$produto->icone"
                class="absolute top-0 right-0 h-full duration-500 text-primary-500 group-hover:-translate-x-12" />
        </x-slot>
        @endif
        <x-ui::section class="flex items-center h-full">
            <x-ui::container>
                <x-ui::h1 class="mb-5">{{ $produto->nome }}</x-ui::h1>
            </x-ui::container>
        </x-ui::section>
    </x-ui::hero>
    <x-ui::section>
        <x-ui::container class="space-y-6">
            <x-ui::h2 class='text-center font-bold'>Conheça mais sobre a solução:</x-ui::h2>
            <div>{!! $produto->descricao !!}</div>
            <div class="text-center">
                <x-ui::button :variant="['primary']">
                    Solicitar uma cotação com especialistas
                </x-ui::button>
            </div>
        </x-ui::container>
    </x-ui::section>
</div>
