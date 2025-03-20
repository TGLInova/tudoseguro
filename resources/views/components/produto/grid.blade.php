@props(['produtos', 'titulo' => null])
<x-ui::section>
    <x-ui::container >
        @if($titulo)
        <x-ui::h2 class="mb-12">
            {{ $titulo }}
        </x-ui::h2>
        @endif
        <div class="grid lg:grid-cols-4 grid-cols-2 gap-8">
            @foreach ($produtos as $produto)
                <x-produto.card :$produto />
            @endforeach
        </div>
    </x-ui::container>
</x-ui::section>
