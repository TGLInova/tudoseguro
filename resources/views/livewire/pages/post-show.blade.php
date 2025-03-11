<article>
    <x-ui::hero :image="$post->imagem?->url ?? null" container-class="lg:h-[25rem] flex flex-col">
        <header class="flex items-center h-full">
            <x-ui::container variant='compact' class="space-y-4">
                <x-ui::h1 class="text-center">{{ $post->titulo }}</x-ui::h1>
                <p class="text-center">{{ $post->descricao }}</p>
                <div class="text-xs flex gap-3 justify-center">
                    <div class="flex gap-2 items-center bg-primary-400/40 p-2 rounded-lg" title="Data da Publicação">
                        <x-icon name='heroicon-o-clock' class="w-4" />
                        <time datetime="{{ $post->data_publicacao->format('c') }}">{{ $post->data_publicacao->format('d/m/Y') }}</time>
                    </div>

                    <div class="flex gap-2 items-center bg-primary-400/40 p-2 rounded-lg" title="Autor">
                        <x-icon name='heroicon-o-user' class="w-4" />
                        <span>{{ $post->usuario?->nome ?? 'Multiseg' }}</span>
                    </div>
                </div>
            </x-ui::container>
        </header>
    </x-ui::hero>
    <x-ui::container variant="compact">
        <div class="-mt-16 mb-16 relative bg-white p-8 rounded-lg shadow-sm shadow-neutral-400">
            <div class="prose max-w-none">{!! $post->texto !!}</div>
        </div>
    </x-ui::container>

    <x-contato.card />
</article>
