<article
    class="flex flex-col gap-8 h-[21rem] relative duration-200">
    <figure class="w-full">
        <img width="379" height="187" alt="{{ $post->titulo }}" src="{{ $post->imagem?->url }}" loading="lazy"
            class="h-full w-full object-cover shadow-sm rounded-xs max-lg:mix-blend-multiply">
    </figure>
    <h4 class="text-lg leading-tight grow">{{ $post->titulo }}</h4>


    <x-ui::button variant="primary" :href="$post->url">
        Clique e leia no Blog
    </x-ui::button>
</article>
