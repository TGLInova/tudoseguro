<x-ui::section :variant="$variant" x-data="{ enable: false }" x-intersect.half:enter="enable = true"
    x-intersect.half:leave="enable = false">
    <x-ui::container>
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <x-ui::h2 class="text-center mb-6">
                    Solicite um contato
                </x-ui::h2>
                @livewire('components.formulario-contato-completo', ['dark' => $variant === 'primary-400'])
            </div>
            <div class="space-y-3">
                <x-ui::h2 class="text-center mb-6">
                    Entre em contato
                </x-ui::h2>
                @foreach($items as $icon => [$url, $item])
                    <a target="_blank" rel="noopener nofollow" @if($url) href="{{ $url }}" @endif class="flex items-center gap-4 px-5 h-20 rounded-lg bg-gray-200 border-2 border-gray-300">
                        <x-icon class="h-10 w-10 flex-none text-primary-500" :name="$icon" />
                        <div>{{ $item }}</div>
                    </a>
                @endforeach
            </div>
        </div>
    </x-ui::container>
</x-ui::section>
