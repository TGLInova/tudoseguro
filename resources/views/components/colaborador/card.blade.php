<div {{ $attributes->class('bg-zinc-200 p-4 rounded-xl relative group space-y-5 colaborador-card') }}>
    <img alt="{{ $colaborador->nome }} {{ $colaborador->sobrenome }}"
        loading="lazy" height="225" width="147"
        class="h-64 w-full object-center object-cover shadow-sm rounded-xl" src="{{ $colaborador->imagem?->url }}">

    <div>
        <h3 class="text-xl leading-none">{{ $colaborador->nome }} {{ $colaborador->sobrenome }}</h3>
        <p class="font-light text-sm">{{ $colaborador->cargo }}</p>
    </div>

    <div class="flex gap-5 items-center justify-center">
        @foreach(['icon-whatsapp', 'icon-instagram', 'icon-linkedin'] as $icon)
            <a class="bg-primary text-white rounded-lg p-2 h-12 w-12">
                <x-icon :name="$icon" class="h-full w-full" />
            </a>
        @endforeach
    </div>
</div>
