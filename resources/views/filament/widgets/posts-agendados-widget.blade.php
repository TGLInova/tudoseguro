<x-filament-widgets::widget>
    <x-filament::section class="p-2">
        <div class="flex items-center gap-2">
            @if($posts)
                <x-icon name="heroicon-o-clock" class="h-8 text-gray-400" />
                Você possui {{ $posts === 1 ? 'uma' : $posts }} <strong>{{ $posts === 1 ? 'publicação agendada' : 'publicações agendadas'}}.</strong>
            @else
                Não há publicações agendadas.
            @endif
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
