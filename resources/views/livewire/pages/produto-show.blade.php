<div>
    <x-ui::hero :image="$produto->imagem->url" container-class="flex flex-col" :variant="['primary', 'normal']" >
        <x-ui::section class="flex items-center h-full">
            <x-ui::container class="text-center space-y-5" variant="compact">
                <x-ui::h1 class="mb-5">{{ $produto->nome }}</x-ui::h1>
                <div>{{ $produto->descricao }}</div>
                <x-ui::button :variant="['primary', 'large']">
                    Contratar Agora
                </x-ui::button>
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
