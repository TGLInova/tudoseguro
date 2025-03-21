<article {{ $attributes->class('flex flex-col gap-4 h relative duration-200 bg-neutral-200 p-5 rounded-xl shadow') }}>
    <header class="flex gap-3 items-center">
        <img src="{!! $post->usuario?->getFilamentAvatarUrl() !!}" class="h-10 w-10 rounded-full object-cover flex-none">
        <div>
            <div class="text-sm font-semibold">{{ $post->usuario?->nome ?? 'Autor' }}</div>
            <div class="text-[0.68rem] text-primary font-light">{{ $post->usuario->colaborador?->cargo ?? 'Redator' }}</div>
        </div>
    </header>
    <figure class="w-full h-32">
        <img width="379" height="187" alt="{{ $post->titulo }}" src="{{ $post->imagem?->url }}" loading="lazy"
            class="h-full w-full object-cover shadow-sm rounded-xl max-lg:mix-blend-multiply">
    </figure>
    <h4 class="text-base font-semibold grow">{{ $post->titulo }}</h4>
    <p class="text-sm font-light">{{ $post->descricao }}</p>
    <x-ui::button variant="primary" :href="$post->url">
        Clique e leia no Blog
    </x-ui::button>
</article>
