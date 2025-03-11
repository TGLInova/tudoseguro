<header class="flex max-lg:flex-col gap-8 mt-16">
    @if ($this->postDestaque)
        <article class="flex max-lg:flex-col max-lg:mt-12 gap-9 border-neutral-400 grow">
            <img class="h-full lg:w-80 w-full flex-none shadow-lg rounded-xs animate-fade"
                width="320"
                height="208"
                loading="eager"
                wire:key="img-{{ $this->postDestaque->id }}"
                title="{{ $this->postDestaque->titulo }}"
                alt="{{ $this->postDestaque->titulo }}"
                src="{{ $this->postDestaque->imagem->url }}">
            <div class="flex flex-col grow">
                <x-ui::h1 class="grow animate-fade">{{ $this->postDestaque->titulo }}</x-ui::h1>
                <x-ui::button :variant="['primary', 'large']" :href="$this->postDestaque->url" wire:navigate class="animate-fade">
                    Leia mais no nosso Blog
                </x-ui::button>
            </div>
        </article>

        <div class="w-px bg-neutral-400"></div>
        <div wire:ignore class="lg:w-1/5 lg:flex-none">
            <x-ui::swiper class="lg:h-52"
                options="{
                    direction: 'horizontal',
                    slidesPerView: 3,
                    spaceBetween: 20,
                    autoplay: false,
                    breakpoints: {
                        800: {
                            direction: 'vertical',
                            slidesPerView: 3,
                            spaceBetween: 20,
                            autoplay: false,
                        }
                    }
                 }">
                @foreach ($posts as $post)
                    <x-ui::swiper.item wire:key="post-swiper-item-{{ $post->id }}">
                        <a wire:click.prevent="$set('postDestaqueId', {{ $post->id }})"
                            class='border-l-4 block px-3 py-1 duration-500'
                            x-bind:class="@js($post->id) === $wire.get('postDestaqueId') ? 'border-primary-400' : 'opacity-70'">
                            <div class="text-xs mb-2">{{ $post->postCategoria?->nome }}</div>
                            <h2 class="font-bold text-base leading-none">{{ $post->titulo }}</h2>
                        </a>
                    </x-ui::swiper.item>
                @endforeach
            </x-ui::swiper>
        </div>
    @else
        <div class="h-52 flex items-center justify-center text-xl">
            Nenhum destaque encontrado 👀
        </div>
    @endif
</header>
