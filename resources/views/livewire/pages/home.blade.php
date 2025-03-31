<div>
    <x-ui::hero
        :image="asset('/static/img/banner-home.webp')"
        class="max-lg:bg-[position:70%_bottom]"
        container-class="flex flex-col items-center relative"
        :variant="['large', 'metalic']">
        <x-icon name="icon-seta-baixo-circulo" class="h-12 w-12 absolute bottom-0 translate-y-1/2 lg:hidden" />
        <x-ui::container class="flex items-center grow">
            <header class="space-y-6 text-white lg:col-span-3 lg:w-1/3" x-bind:class="{ '*:animate-fade-up': enable }">
                <x-ui::h1 class="animate-duration-500">
                    Proteção para a carreira dos profissionais da saúde.
                </x-ui::h1>
                <x-ui::button href="#formulario" class="animate-duration-700" :variant="['primary', 'base']">
                    Entrar em contato
                </x-ui::button>
            </header>
        </x-ui::container>
    </x-ui::hero>

    <x-sections.home.about />

    <x-produto.section :produtos="$produtos" />

    <x-ui::section>
        <x-ui::container class="grid lg:grid-cols-2 gap-24">
            <div class="space-y-8">
                <x-ui::h2>
                    A corretora de seguros <strong>mais bem avaliada</strong> de Cacoal–RO.
                </x-ui::h2>
                <p>Confiança e tradição de quem está há 24 anos cuidando de vidas e patrimônios.</p>
                <x-ui::button :variant="['primary']">
                    Entrar em Contato
                </x-ui::button>
            </div>
            <div class="flex flex-col justify-center">
                <x-ui::card variant="neutral" class="flex gap-5 items-center">
                    <div class="w-20 flex-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 125 126">
                            <path fill="#004F7B"
                                d="M117.5 64.303c0-4.063-.365-7.969-1.042-11.719H62.5v22.188h30.833c-1.354 7.135-5.416 13.177-11.51 17.24v14.426h18.594c10.833-10 17.083-24.687 17.083-42.135Z" />
                            <path fill="#004F7B"
                                d="M62.501 120.292c15.469 0 28.438-5.104 37.917-13.854L81.824 92.01c-5.104 3.438-11.614 5.521-19.323 5.521-14.895 0-27.552-10.052-32.083-23.594H11.355V88.73c9.428 18.698 28.75 31.563 51.146 31.563Z" />
                            <path fill="#004F7B"
                                d="M30.415 73.885c-1.145-3.438-1.823-7.084-1.823-10.886 0-3.802.678-7.448 1.823-10.885V37.322H11.353A56.584 56.584 0 0 0 5.207 63c0 9.271 2.24 17.97 6.146 25.677l14.844-11.562 4.218-3.23Z" />
                            <path fill="#004F7B"
                                d="M62.501 28.521c8.438 0 15.938 2.917 21.927 8.542l16.407-16.406C90.887 11.387 77.97 5.709 62.501 5.709c-22.395 0-41.718 12.865-51.145 31.615l19.062 14.791c4.531-13.541 17.188-23.594 32.083-23.594Z" />
                        </svg>
                    </div>
                    <div class='space-y-2 grow'>
                        <div class="font-semibold text-2xl">Tudo Seguro</div>
                        <svg viewBox="0 0 395 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M14.3163 48.576C12.4283 48.576 10.6043 48.224 8.84425 47.52C7.08425 46.784 5.58025 45.76 4.33225 44.448C3.08425 43.104 2.26825 41.504 1.88425 39.648L8.46025 37.44C8.94025 38.976 9.70825 40.096 10.7643 40.8C11.8203 41.504 13.0043 41.856 14.3163 41.856C15.4363 41.856 16.4123 41.632 17.2443 41.184C18.0763 40.704 18.7163 40.048 19.1643 39.216C19.6443 38.352 19.8843 37.36 19.8843 36.24C19.8843 35.12 19.6443 34.144 19.1643 33.312C18.7163 32.48 18.0763 31.84 17.2443 31.392C16.4123 30.912 15.4363 30.672 14.3163 30.672C13.1643 30.672 12.1403 30.928 11.2443 31.44C10.3483 31.92 9.69225 32.672 9.27625 33.696L3.18025 32.256L6.06025 12.24H26.0283V18.48H9.08425L11.8683 15.12L9.90025 30L7.88425 28.224C8.68425 26.912 9.69225 25.952 10.9083 25.344C12.1563 24.736 13.7563 24.432 15.7083 24.432C18.1083 24.432 20.1723 24.944 21.9003 25.968C23.6283 26.96 24.9563 28.336 25.8843 30.096C26.8443 31.856 27.3243 33.904 27.3243 36.24C27.3243 38.576 26.7483 40.688 25.5963 42.576C24.4763 44.432 22.9403 45.904 20.9883 46.992C19.0363 48.048 16.8123 48.576 14.3163 48.576ZM35.8326 48V40.8H43.0326V48H35.8326ZM66.0344 48.576C63.1864 48.576 60.6744 47.808 58.4984 46.272C56.3544 44.736 54.6744 42.576 53.4584 39.792C52.2424 37.008 51.6344 33.776 51.6344 30.096C51.6344 26.384 52.2264 23.152 53.4104 20.4C54.6264 17.648 56.3064 15.504 58.4504 13.968C60.6264 12.432 63.1384 11.664 65.9864 11.664C68.8984 11.664 71.4264 12.432 73.5704 13.968C75.7464 15.504 77.4264 17.664 78.6104 20.448C79.8264 23.2 80.4344 26.416 80.4344 30.096C80.4344 33.776 79.8264 37.008 78.6104 39.792C77.4264 42.544 75.7464 44.704 73.5704 46.272C71.4264 47.808 68.9144 48.576 66.0344 48.576ZM66.0824 41.856C67.5544 41.856 68.8024 41.392 69.8264 40.464C70.8504 39.536 71.6344 38.192 72.1784 36.432C72.7224 34.672 72.9944 32.56 72.9944 30.096C72.9944 27.632 72.7224 25.536 72.1784 23.808C71.6344 22.048 70.8344 20.704 69.7784 19.776C68.7544 18.848 67.4904 18.384 65.9864 18.384C64.5144 18.384 63.2664 18.848 62.2424 19.776C61.2184 20.704 60.4344 22.048 59.8904 23.808C59.3464 25.536 59.0744 27.632 59.0744 30.096C59.0744 32.528 59.3464 34.624 59.8904 36.384C60.4344 38.144 61.2184 39.504 62.2424 40.464C63.2984 41.392 64.5784 41.856 66.0824 41.856Z"
                                fill="#FEA500" />
                            <path
                                d="M141.209 3.60489C141.944 2.12477 144.056 2.12478 144.791 3.60489L150.797 15.6929C151.088 16.279 151.648 16.6856 152.295 16.7814L165.648 18.7581C167.283 19.0001 167.935 21.0082 166.755 22.1649L157.114 31.6124C156.647 32.0705 156.433 32.7283 156.542 33.3736L158.788 46.6833C159.063 48.313 157.355 49.554 155.89 48.7888L143.926 42.5397C143.346 42.2366 142.654 42.2366 142.074 42.5396L130.11 48.7888C128.645 49.554 126.937 48.313 127.212 46.6833L129.458 33.3736C129.567 32.7283 129.353 32.0705 128.886 31.6124L119.245 22.1649C118.065 21.0081 118.717 19.0001 120.352 18.7581L133.705 16.7814C134.352 16.6856 134.912 16.279 135.203 15.6929L141.209 3.60489Z"
                                fill="#FEA500" />
                            <path
                                d="M197.209 3.60489C197.944 2.12477 200.056 2.12478 200.791 3.60489L206.797 15.6929C207.088 16.279 207.648 16.6856 208.295 16.7814L221.648 18.7581C223.283 19.0001 223.935 21.0082 222.755 22.1649L213.114 31.6124C212.647 32.0705 212.433 32.7283 212.542 33.3736L214.788 46.6833C215.063 48.313 213.355 49.554 211.89 48.7888L199.926 42.5397C199.346 42.2366 198.654 42.2366 198.074 42.5396L186.11 48.7888C184.645 49.554 182.937 48.313 183.212 46.6833L185.458 33.3736C185.567 32.7283 185.353 32.0705 184.886 31.6124L175.245 22.1649C174.065 21.0081 174.717 19.0001 176.352 18.7581L189.705 16.7814C190.352 16.6856 190.912 16.279 191.203 15.6929L197.209 3.60489Z"
                                fill="#FEA500" />
                            <path
                                d="M253.209 3.60489C253.944 2.12477 256.056 2.12478 256.791 3.60489L262.797 15.6929C263.088 16.279 263.648 16.6856 264.295 16.7814L277.648 18.7581C279.283 19.0001 279.935 21.0082 278.755 22.1649L269.114 31.6124C268.647 32.0705 268.433 32.7283 268.542 33.3736L270.788 46.6833C271.063 48.313 269.355 49.554 267.89 48.7888L255.926 42.5397C255.346 42.2366 254.654 42.2366 254.074 42.5396L242.11 48.7888C240.645 49.554 238.937 48.313 239.212 46.6833L241.458 33.3736C241.567 32.7283 241.353 32.0705 240.886 31.6124L231.245 22.1649C230.065 21.0081 230.717 19.0001 232.352 18.7581L245.705 16.7814C246.352 16.6856 246.912 16.279 247.203 15.6929L253.209 3.60489Z"
                                fill="#FEA500" />
                            <path
                                d="M309.209 3.60489C309.944 2.12477 312.056 2.12478 312.791 3.60489L318.797 15.6929C319.088 16.279 319.648 16.6856 320.295 16.7814L333.648 18.7581C335.283 19.0001 335.935 21.0082 334.755 22.1649L325.114 31.6124C324.647 32.0705 324.433 32.7283 324.542 33.3736L326.788 46.6833C327.063 48.313 325.355 49.554 323.89 48.7888L311.926 42.5397C311.346 42.2366 310.654 42.2366 310.074 42.5396L298.11 48.7888C296.645 49.554 294.937 48.313 295.212 46.6833L297.458 33.3736C297.567 32.7283 297.353 32.0705 296.886 31.6124L287.245 22.1649C286.065 21.0081 286.717 19.0001 288.352 18.7581L301.705 16.7814C302.352 16.6856 302.912 16.279 303.203 15.6929L309.209 3.60489Z"
                                fill="#FEA500" />
                            <path
                                d="M365.209 3.60489C365.944 2.12477 368.056 2.12478 368.791 3.60489L374.797 15.6929C375.088 16.279 375.648 16.6856 376.295 16.7814L389.648 18.7581C391.283 19.0001 391.935 21.0082 390.755 22.1649L381.114 31.6124C380.647 32.0705 380.433 32.7283 380.542 33.3736L382.788 46.6833C383.063 48.313 381.355 49.554 379.89 48.7888L367.926 42.5397C367.346 42.2366 366.654 42.2366 366.074 42.5396L354.11 48.7888C352.645 49.554 350.937 48.313 351.212 46.6833L353.458 33.3736C353.567 32.7283 353.353 32.0705 352.886 31.6124L343.245 22.1649C342.065 21.0081 342.717 19.0001 344.352 18.7581L357.705 16.7814C358.352 16.6856 358.912 16.279 359.203 15.6929L365.209 3.60489Z"
                                fill="#FEA500" />
                        </svg>
                        <div class="text-sm">155 avaliações no Google</div>
                    </div>
                </x-ui::card>
            </div>
        </x-ui::container>
    </x-ui::section>

    <x-ui::section x-data="{ enable: false }" x-intersect.full:enter="enable = true"
        x-intersect.full:leave="enable = false" variant="neutral">
        <x-ui::container variant="compact" class="space-y-12" x-bind:class="{ '*:animate-fade-up': enable }">
            <x-ui::h2 class="text-center">Veja o que os nossos clientes falam:</x-ui::h2>
            <x-ui::swiper
                options="{
                    slidesPerView: 1,
                    direction: 'horizontal',
                }"
                class="animate-delay-300 max-lg:h-[45rem]">
                @foreach ($testemunhos as $testemunho)
                    <x-ui::swiper.item>
                        <div
                            class="p-8 bg-gray-300 lg:space-y-8 rounded-xl shadow-lg flex flex-col justify-center items-center">
                            <header class="flex gap-4 items-center justify-center">
                                <img class="w-12 h-12 flex-none rounded-full shadow-sm border-4 border-primary-400"
                                    src="{{ $testemunho->imagem->url }}" width="50" height="50"
                                    alt="Testemunho de {{ $testemunho->nome }}" loading="lazy">
                                <h3 class="font-semibold">{{ $testemunho->nome }}</h3>
                            </header>
                            <q class="grow max-lg:w-full text-xl">{!! $testemunho->texto !!}</q>
                            <x-icon name="icon-quote" class="w-16 h-16 text-primary-400" />
                        </div>
                    </x-ui::swiper.item>
                @endforeach
            </x-ui::swiper>

            <div class="text-center animate-delay-700">
                <x-ui::button variant="primary">
                    Entrar em contato com a nossa equipe
                </x-ui::button>
            </div>
        </x-ui::container>
    </x-ui::section>

    <x-ui::section x-data="{ animate: false }" x-intersect.half:enter="animate = true"
        x-intersect.half:leave="animate = false">

        <x-ui::container>
            <div class="grid lg:grid-cols-3 gap-12">
                <div class="space-y-5" x-bind:class="{ 'animate-fade-left': animate }">
                    <x-ui::h2>Somos <strong>especialistas</strong> em proteger a carreira e o futuro
                        financeiro dos <strong>profissionais liberais</strong>.</x-ui::h2>
                    <p>Conheça um portfólio de proteções para você trabalhar com confiança!</p>
                    <x-ui::button wire:navigate :href="route('produtos')">
                        Proteger minha carreira
                    </x-ui::button>
                </div>
                <div class="flex lg:col-span-2 justify-center">
                    @foreach ([1, 2, 3] as $i)
                        <img src='{{ asset("static/img/especialista-{$i}.webp") }}'
                            x-bind:class="{ 'animate-fade-left': animate }" @class([
                                'lg:w-56 w-1/3 flex-none animate-delay-(--delay-value) object-contain',
                                '-mr-5' => !$loop->last,
                            ])
                            style="--delay-value: {{ $i * 300 }}ms">
                    @endforeach
                </div>

            </div>
        </x-ui::container>
    </x-ui::section>
    <x-colaborador.section />
    <x-ui::section variant="primary">
        <x-ui::container>
            <div class="grid grid-cols-2 gap-12 items-center">
                <div>
                    <x-ui::h2>
                        Cartão de Benefícios <strong>Tudo Seguro</strong>.
                    </x-ui::h2>
                    <p>Descontos em farmácias, clínicas e academias.</p>
                </div>
                <div class='space-y-6'>
                    <x-ui::input variant="transparent" placeholder="Nome:" />
                    <x-ui::input variant="transparent" placeholder="CPF:" />
                    <x-ui::button variant="primary-400" class="w-full">
                        Gerar meu cartão
                    </x-ui::button>
                </div>
            </div>
        </x-ui::container>
    </x-ui::section>

    <div class="py-6 bg-gray-200">
        <x-ui::container class="grid grid-cols-5 gap-6 items-center">
            <x-ui::h3 class="max-lg:hidden">
                Conheça alguns de
                <span class="font-semibold">nossos parceiros</span>
            </x-ui::h3>
            <div class="col-span-4">
                <x-ui::swiper class="w-full" swiper-wrapper-class="items-center"
                    options="{
                    slidesPerView: 5,
                    breakpoints: {
                        800: { slidesPerView: 6, spaceBetween: 45, loop: true, autoplay: true }
                    }
                }">
                    @foreach ($parceiros as $parceiro)
                        <x-ui::swiper.item>
                            <img src="{{ $parceiro->imagem->url }}" title="{{ $parceiro->nome }}"
                                alt="{{ $parceiro->nome }}" loading="lazy" width="138" height="90"
                                class="w-full object-contain object-center grayscale hover:grayscale-0 duration-300">
                        </x-ui::swiper.item>
                    @endforeach
                </x-ui::swiper>
            </div>
        </x-ui::container>
    </div>

    <x-sections.structure />

    <x-ui::section>
        <x-ui::container variant="large">
            <x-ui::h2 class="text-center mb-12">
                Notícias e novidade do nosso <strong>Blog</strong>!
            </x-ui::h2>

            <x-ui::swiper
                options="{
                slidesPerView: 1.3,
                direction: 'horizontal',
                autoplay: false,
                breakpoints: {
                    800: {
                        slidesPerView: 4
                    }
                }}"
                class="animate-delay-300 max-lg:h-[45rem]">
                @foreach ($posts as $post)
                    <x-ui::swiper.item>
                        <x-post.card :post="$post" />
                    </x-ui::swiper.item>
                @endforeach
            </x-ui::swiper>
        </x-ui::container>
    </x-ui::section>

    <x-contato.card />



</div>
