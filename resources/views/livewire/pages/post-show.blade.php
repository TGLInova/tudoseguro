<article>
    <x-ui::hero :image="$post->imagem?->url ?? null" container-class="lg:h-[25rem] flex flex-col" :variant="['normal', 'primary']">
        <header class="flex items-center h-full">
            <x-ui::container variant='compact' class="space-y-4">
                <x-ui::h1 class="text-center">{{ $post->titulo }}</x-ui::h1>
            </x-ui::container>
        </header>
    </x-ui::hero>
    <x-ui::container>
        <div class="p-5 rounded-lg shadow bg-slate-100 -translate-y-1/2">
            <div class="flex gap-3 justify-between w-full items-center">
                <em class="max-lg:hidden">#Artigo</em>
                <div class="flex items-center gap-4">
                    <em class="max-lg:hidden">Escrito Por:</em>
                    <div class="flex gap-2 items-center">
                        <img src="{{ $post->usuario?->getFilamentAvatarUrl() }}" class="h-12 w-12 object-cover rounded-sm">
                        <div>
                            <div class="font-bold">{{ $post->usuario?->colaborador?->nome ?? $post->usuario?->nome ?? 'Tudo Seguro' }}</div>
                            <div class="font-light text-sm">{{ $post->usuario?->colaborador?->cargo ?? 'Redator'}}</div>
                        </div>
                    </div>
                </div>
                <div  title="Data da Publicação">
                    <time
                        datetime="{{ $post->data_publicacao->format('c') }}">{{ $post->data_publicacao->format('d/m/Y') }}</time>
                </div>
            </div>
        </div>
    </x-ui::container>
    <x-ui::container>
        <div class="mb-5">{{ $post->descricao }}</div>
        <div class="prose max-w-none">{!! $post->texto !!}</div>
    </x-ui::container>

    <x-contato.card />
</article>
