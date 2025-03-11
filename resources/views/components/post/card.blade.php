
<a x-on:click="Livewire.navigate(@js($post->url))" class="flex max-lg:flex-col gap-8 h-full relative duration-200 hover:translate-x-2">
    <figure class="lg:w-2/5 w-full absolute max-lg:left-0 max-lg:top-0 max-lg:h-full max-lg:w-full flex-none lg:relative">
        <img width="379" height="187" alt="{{ $post->titulo }}" src="{{ $post->imagem?->url }}" loading="lazy" class="h-full w-full object-cover shadow-sm rounded-xs max-lg:mix-blend-multiply">
    </figure>
    <div class="max-lg:py-4 grow space-y-4 relative pr-6 max-lg:pl-32 max-lg:bg-linear-to-r from-primary-400/60 via-primary-400/90 to-primary-400 flex flex-col max-lg:justify-center">
        <div class="gap-3 flex text-xs">
            <div class="bg-primary-200 px-4 py-1 flex items-center text-white">Artigo</div>
            <div class="border-2 text-primary-200 border-current px-4 py-1 flex items-center">Escrito por Wallace</div>
            <div>
                {{ $post->data_publicacao->isoFormat('DD/MM/YYYY') }}
            </div>
        </div>
        <x-ui::h3 class='grow'>{{ $post->titulo }}</x-ui::h3>
        <p>{{ $post->descricao }}</p>
    </div>
</a>
