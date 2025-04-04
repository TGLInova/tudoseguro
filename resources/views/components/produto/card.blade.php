<x-ui::card {{ $attributes->class('flex-none flex flex-col w-full items-start space-y-3 h-64') }}>
    <x-icon :name="$produto->icone ?? 'heroicon-o-x-mark'" class="lg:w-10 lg:h-10 h-8 w-8 flex-none text-primary-500" />
    <h3 class="text-xl font-semibold leading-none w-full" title="{{ $produto->nome }}">{{ $produto->nome }}</h3>
    <p class="text-xs lg:text-sm grow">{{ Str::limit($produto->descricao, 85) }}</p>
    <x-ui::button :variant="['primary', 'small']" :href="$produto->url">
        Saiba mais
    </x-ui::button>
</x-ui::card>
