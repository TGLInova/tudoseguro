<x-ui::section :variant="$dark ? 'primary' : 'grey'" x-data="{ enable: false }" x-intersect.full:enter="enable = true"
    x-intersect.full:leave="enable = false">
    <x-ui::container class="text-center space-y-16" x-bind:class="{ '*:animate-fade-up': enable }">
        <x-ui::h2 class="whitespace-pre-line">
            {!! $titulo !!}
        </x-ui::h2>

        <div class="grid lg:grid-cols-4 grid-cols-2 gap-8 animate-delay-200">
            @foreach ($items as $item)
                <x-ui::card :variant="$dark ? ['bordered-200'] : ['bordered']" class="lg:w-60 flex flex-col items-center flex-none space-y-4 text-center group animate-duration-1000 hover:animate-jump">
                    <x-icon :name="$item['icone']" @class(['w-10 h-10 flex-none duration-500 group-hover:scale-125', $dark ? 'text-primary-200' : 'text-primary-400']) />
                    <h3 @class(['text-lg', $dark ? 'text-current' : 'text-black'])>{{ $item['titulo'] }}</h3>
                    <p class="text-sm scale-">{{ $item['texto'] ?? null }}</p>
                </x-ui::card>
            @endforeach
        </div>

        <x-ui::button :variant="$dark ? 'primary-200' : 'primary'" class="animate-delay-500">
            Solicitar uma cotação
        </x-ui::button>
    </x-ui::container>
</x-ui::section>
