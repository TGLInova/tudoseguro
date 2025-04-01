<article {{ $attributes->class('flex flex-col gap-4 h relative duration-200 bg-gray-200 p-5 rounded-xl shadow h-96') }}>
    <header class="flex gap-3 items-center">
        <img src="{!! $post->usuario?->getFilamentAvatarUrl() !!}" class="h-9 w-9 rounded-full object-cover flex-none">
        <div class="leading-none">
            <div class="text-sm font-semibold">{{ $post->usuario?->nome ?? 'Autor' }}</div>
            <div class="text-[0.68rem] text-primary font-light">{{ $post->usuario->colaborador?->cargo ?? 'Redator' }}</div>
        </div>
    </header>
    <div class="w-full h-32 bg-primary rounded-xl overflow-hidden relative">
        <img width="379" height="187" alt="{{ $post->titulo }}" src="{{ $post->imagem?->url }}" loading="lazy"
            class="h-full w-full object-cover shadow-sm grayscale-100 mix-blend-overlay">
    </div>
    <h4 class="text-xl leading-snug grow">{{ $post->titulo }}</h4>
    <x-ui::button variant="primary" :href="$post->url">
        Leia mais
    </x-ui::button>
</article>
