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
            <div class="space-y-5">
                <x-ui::h2 class="text-center mb-6">
                    Entre em contato
                </x-ui::h2>
                @foreach($items as $icon => $item)
                <div class="flex items-center gap-4 px-6 h-20 rounded-lg bg-neutral-200 border-2 border-neutral-300">
                    <x-icon class="h-10 w-10 flex-none text-primary-500" :name="$icon" />
                    <div>{{ $item }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </x-ui::container>
</x-ui::section>
