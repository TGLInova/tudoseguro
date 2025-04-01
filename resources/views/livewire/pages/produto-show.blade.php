<div>
    <x-ui::hero :image="$produto->imagem?->url" container-class="flex flex-col" :variant="['primary', 'normal']">
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

    @if ($produto->metadados)

        <x-ui::section>
            <x-ui::container class="space-y-6">
                <x-ui::h2 class='text-center font-semibold'>O que é?</x-ui::h2>
                <div class='text-center font-light'>{!! $produto->metadados->get('texto') !!}</div>
            </x-ui::container>
        </x-ui::section>

        @if($items = $produto->metadados->get('public_alvo'))
        <x-ui::section>
            <x-ui::container class="space-y-6">
                <x-ui::h2 class='text-center font-semibold'>Para quem é indicado:</x-ui::h2>
                <div class="grid lg:grid-cols-3 gap-8">
                    @foreach ($items as $item)
                        <x-ui::card>
                            <header class="flex gap-3 items-center mb-3">
                                @if ($item['icone'])
                                    <x-icon :name="$item['icone']" class="h-12 w-12 text-primary-400 flex-none" />
                                @endif
                                <h4 class="font-bold text-lg">{{ $item['titulo'] }}</h4>
                            </header>
                            <p>{{ $item['texto'] }}</p>
                        </x-ui::card>
                    @endforeach
                </div>
            </x-ui::container>
        </x-ui::section>
        @endif

        <section class="bg-gray-200">
            <x-ui::container class="space-y-6 grid lg:grid-cols-2 gap-16 items-center">
                <div class='space-y-4 py-12'>
                    <x-ui::h2 class='font-semibold'>Benefícios do {{ $produto->nome }}</x-ui::h2>
                    <div class="prose marker:text-gray-400 marker:text-sm">{!! data_get($produto->metadados, 'beneficios.texto') !!}</div>
                    <x-ui::button variant="primary">
                        Contratar agora
                    </x-ui::button>
                </div>
                @php
                    $img = data_get($produto->metadados, 'beneficios.imagem');
                @endphp
                <div class="h-full flex items-end">
                    <img class="h-96 w-96 object-contain object-bottom"
                        src="{{ $img ? Storage::url($img) : asset('static/img/beneficios.webp') }}">
                </div>
            </x-ui::container>
        </section>


        @if($items = $produto->metadados->get('coberturas'))
        <x-ui::section>
            <x-ui::container class="space-y-6">
                <x-ui::h2 class='text-center font-semibold'>Coberturas e Assistências de {{ $produto->nome }}</x-ui::h2>
                <div class="grid lg:grid-cols-2 gap-16">
                    @foreach ($items as $item)
                        <x-ui::card class="space-y-4">
                            @if ($item['icone'])
                                <x-icon :name="$item['icone']" class="h-12 w-12 text-primary-400 flex-none" />
                            @endif
                            <h4 class="font-bold text-2xl">{{ $item['titulo'] }}:</h4>
                            <ul class="list-disc list-inside marker:text-gray-400 marker:text-sm">
                                @foreach ($item['itens'] as $texto)
                                    <li>{{ $texto }}</li>
                                @endforeach
                            </ul>
                        </x-ui::card>
                    @endforeach
                </div>
            </x-ui::container>
        </x-ui::section>
        @endif
    @endif
</div>
