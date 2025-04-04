@php
$url =  route('cartao_digital', ['colaborador' => $colaborador]) ;
@endphp
<div {{ $attributes->class('bg-gray-200 p-4 rounded-xl relative group space-y-5 colaborador-card') }}>
    <a href="{{$url}}" class="block">
    <img alt="{{ $colaborador->nome }} {{ $colaborador->sobrenome }}"
        loading="lazy" height="225" width="147"
        class="h-64 w-full object-center object-cover shadow-sm rounded-xl" src="{{ $colaborador->imagem?->url }}">
    </a>

    <a href="{{ $url }}" class="block">
        <h3 class="text-xl leading-none">{{ $colaborador->nome }} {{ $colaborador->sobrenome }}</h3>
        <p class="font-light text-sm">{{ $colaborador->cargo }}</p>
    </a>

    <div class="flex gap-5 items-center justify-center">
        @foreach($redesSociais as $icon => $url)
            <a @class(['bg-primary text-white rounded-lg p-2 h-12 w-12', 'grayscale-100 pointer-events-none' => blank($url) ]) target="_blank" href="{{ $url }}" rel="noopener nofollow">
                <x-icon :name="$icon" class="h-full w-full" />
            </a>
        @endforeach
    </div>
</div>
