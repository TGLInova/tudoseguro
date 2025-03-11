@props(['post'])
<a {{ $attributes->class('space-y-4 h-[25rem] group')->merge(['href' => $post->url, 'wire:navigate' => true]) }}>
    <div class="bg-primary-400 group-hover:bg-transparent duration-500 h-48 rounded-xs">
        <img src="{{ $post->imagem->url }}"
            alt="{{ $post->titulo}}"
            width="394"
            height="192"
            class="h-full w-full object-cover object-center mix-blend-multiply">
    </div>
    <div class="flex justify-between items-center gap-3">
        <div class="bg-primary text-white px-3.5 py-1 text-xs">Artigo</div>
        <div class="text-primary border-current px-3.5 py-1">
            @if ($post->usuario)
                Escrito por {{ $post->usuario?->nome }}
            @endif
        </div>
        <time datetime="{!! $post->data_publicacao->format('c') !!}" class='text-xs'>{{ $post->data_publicacao->diffForHumans() }}</time>
    </div>
    <x-ui::h3 class="font-semibold duration-500 group-hover:text-primary-400">{{ $post->titulo }}</x-ui::h3>
    <p class="text-sm">{{ $post->descricao }}</p>
</a>
