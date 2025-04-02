<article>
    <x-ui::hero :image="$post->imagem?->url ?? null" container-class="lg:h-[25rem] flex flex-col" :variant="['normal', 'primary']">
        <header class="flex items-center h-full">
            <x-ui::container variant='compact' class="space-y-4">
                <x-ui::h1 class="text-center">{{ $post->titulo }}</x-ui::h1>
            </x-ui::container>
        </header>
    </x-ui::hero>
    <x-ui::container>
        <div class="p-5 rounded-lg shadow bg-gray-100 -translate-y-1/2">
            <div class="flex gap-3 justify-between w-full items-center">
                <em class="max-lg:hidden">#Artigo</em>
                <div class="flex items-center gap-4">
                    <em class="max-lg:hidden">Escrito Por:</em>
                    <div class="flex gap-2 items-center">
                        <img src="{{ $post->usuario?->getFilamentAvatarUrl() }}"
                            height="48"
                            width="48"
                            alt="{{ $post->usuario?->nome }}"
                            class="h-12 w-12 object-cover rounded-sm">
                        <div>
                            <div class="font-bold">
                                {{ $post->usuario?->colaborador?->nome ?? ($post->usuario?->nome ?? 'Tudo Seguro') }}
                            </div>
                            <div class="font-light text-sm">{{ $post->usuario?->colaborador?->cargo ?? 'Redator' }}
                            </div>
                        </div>
                    </div>
                </div>
                <div title="Data da Publicação">
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

    @if($post->usuario)
        <x-ui::section>
            <x-ui::container>
                <div class="bg-gray-200 p-12 rounded-md shadow-sm">
                    <x-ui::h3 class="text-center mb-8">
                        <div class="font-semibold">Você gostou do conteúdo?</div>
                        <div>Você pode entrar em contato diretamente com {{ $post->usuario->nome }}!</div>
                    </x-ui::h3>
                    <div class="flex gap-8 justify-center items-center max-lg:flex-col">
                        <div class="flex gap-4 items-center">
                            <img width="50" height="50"  alt="{{ $post->usuario?->nome }}" loading="lazy" class="h-12 w-12 rounded object-center object-cover flex-none" src="{{ $post->usuario->getFilamentAvatarUrl()}}">
                            <div>
                                <h4 class="text-2xl font-semibold">{{ $post->usuario->nome }}</h4>
                                <p class="font-light text-xl">{{ $post->usuario->colaborador?->cargo ?? 'Redator' }}</p>
                            </div>
                        </div>
                        <nav class="grid grid-cols-3 lg:gap-4 gap-8">
                            @foreach (['icon-whatsapp' => 'whatsapp', 'icon-instagram' => 'instagram', 'icon-linkedin' => 'linkedin'] as $icon => $field)
                                @php
                                $redeSocial = $post->usuario?->colaborador?->getAttribute($field);
                                @endphp

                                @unless($redeSocial)
                                    @continue
                                @endunless

                                <a class="bg-primary text-white rounded-lg p-2 h-12 w-12" href="{{ $redeSocial }}">
                                    <x-icon :name="$icon" class="h-full w-full" />
                                </a>
                            @endforeach
                        </nav>
                    </div>
                </div>
            </x-ui::container>
        </x-ui::section>
    @endif
</article>
