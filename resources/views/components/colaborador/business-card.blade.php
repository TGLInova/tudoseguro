<div class="grid grid-cols-7 gap-8 p-6 group-[.swiper-slide-active]:bg-gray-300 bg-gray-200 duration-300">
    <div class="flex flex-col justify-center col-span-4">
        <x-ui::h4 class="font-bold">{{ $colaborador->nome }} {{ $colaborador->sobrenome }}</x-ui::h4>
        <p class="text-lg font-light">{{ $colaborador->cargo }}</p>
        <nav class="grid grid-cols-5 gap-2 mt-8">
            @foreach (['email' => 'icon-email', 'telefone' => 'icon-telefone', 'instagram' => 'icon-instagram', 'linkedin' => 'icon-linkedin'] as $k => $v)
                <a href="{{ $colaborador->getAttributeValue($k) }}" rel="noopener nofollow"
                    class="block  flex-none duration-500 text-primary-200 group-[.swiper-slide-active]:text-primary-400 h-7 w-7">
                    <x-icon :name="$v" class="h-full w-full" />
                </a>
            @endforeach
        </nav>
    </div>
    <div class="lg:h-56 col-span-3">
        <img height="256" width="256" alt="{{ $colaborador->nome }}" src="{{ $colaborador->imagem->url }}" class="h-full w-full object-cover object-center">
    </div>
</div>
