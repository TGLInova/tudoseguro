<div>
    <x-ui::hero :image="asset('/static/img/banner-sobre-2.webp')" class="lg:bg-[center_5%] !bg-top max-lg:bg-[size:auto_136%]" container-class="flex flex-col" :variant="['normal', 'metalic']">
        <x-ui::container class="flex items-center grow">
            <header class="space-y-6 text-white lg:col-span-3 lg:w-1/3 text-center" x-bind:class="{ '*:animate-fade-up': enable }">
                <x-ui::h1 class="animate-duration-500">
                    Conheça a Tudo Seguro
                </x-ui::h1>
                <p>Nossa história, valores, missão e objetivos!</p>
            </header>
        </x-ui::container>
    </x-ui::hero>

    <x-ui::section variant="neutral" x-data="{ enable: false }" x-intersect.half:leave="enable = false"
        x-intersect.half:enter="enable = true">
        <x-ui::container class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-4 text-justify text-sm" x-bind:class="{ '*:animate-fade-up': enable }">
                <x-ui::h2>
                    Sobre a Tudo Seguro
                </x-ui::h2>

                <p class="animate-delay-[100ms] font-light">
                    Tudo Seguro Corretora de Seguros, iniciou suas atividades no dia 19 de junho de 2000, na cidade de
                    Cacoal, onde mantém sua sede administrativa. Em julho de 2012, após mudança dos gestores, a
                    corretora iniciou uma nova fase, deixando de atuar somente no ramo de automóveis.
                </p>

                <p class="animate-delay-[150ms] font-light">
                    Diante disso, estratégias foram realinhadas com foco em prover soluções práticas para os atuais e
                    futuros clientes, através do atendimento consultivo e personalizado, abrindo novos mercados na área
                    de benefícios, referenciando como uma das melhores no estado em 2014, oferecendo proteção para
                    funcionários de pequenas, médias e grandes empresas, além de ganhar várias campanhas no segmento de
                    seguro de vida individual e previdência privada.
                </p>
            </div>
            <div>
                <img alt="Multiseg" title="Multiseg" width="560" height="359" loading="eager"
                    class="animate-delay-700 w-full h-full object-cover rounded-xl shadow"
                    src="{{ asset('static/img/equipe.webp') }}" x-bind:class="{ 'animate-fade-right': enable }">
            </div>
        </x-ui::container>
    </x-ui::section>

    <x-ui::section variant="neutral" x-data="{ enable: false }" x-intersect.half:leave="enable = false"
        x-intersect.half:enter="enable = true">
        <x-ui::container>
            <div class="grid lg:grid-cols-5 gap-12 items-center">
                <figure class="animate-delay-[300ms] w-full block lg:col-span-3"
                    x-bind:class="{ 'animate-fade': enable }">
                    <img alt="Alexandre Faria" class='w-full object-center object-cover' width="552" height="353"
                        src="{{ asset('static/img/equipe-2.webp') }}" loading="eager">
                </figure>
                <div class="lg:col-span-2 text-sm" x-bind:class="{ '*:animate-fade-up': enable }">
                    <p class="mb-5 animate-delay-[750ms]">
                        Sempre alinhada às necessidades do mercado, em 2015 a Tudo Seguro se tornou referência no Estado
                        de
                        Rondônia no atendimento à profissionais da área de saúde, oferecendo proteção para suas
                        carreiras,
                        através do Seguro de Responsabilidade Civil Profissional e do Seguro Perda de Renda.
                    </p>
                    <p class="animate-delay-[800ms] mb-5">

                        O casal de corretores de seguros e proprietários da Tudo Seguro, Elizeu Dias dos Santos e Daiane
                        Cristina Ribeiro dos Santos, investem constantemente em cursos, workshops e congressos, sempre
                        buscando se atualizarem, no intuito de oferecer o melhor atendimento aos seus clientes.
                    </p>

                </div>
            </div>
        </x-ui::container>
    </x-ui::section>

    <x-ui::section>
        <x-ui::container>
            <x-ui::swiper options="{ slidesPerView: 1.45, spaceBetween: 8, breakpoints: { 800: { slidesPerView: 3, spaceBetween: 64, } } }">
                @foreach ($valores as $valor)
                    <x-ui::swiper.item class="max-lg:px-3">
                        <x-ui::card variant="neutral" class="space-y-4 flex flex-col items-center h-72">
                            <x-icon name="icon-check" class="h-11 w-11 text-primary-400" />
                            <h3 class="text-black text-2xl text-center">{{ $valor['titulo'] }}</h3>
                            <div class='[&>ul]:list-disc [&>ul]:text-left [&>ul]:list-inside w-full text-center leading-snug'>{!! Str::markdown($valor['texto']) !!}</div>
                        </x-ui::card>
                    </x-ui::swiper.item>
                @endforeach
            </x-ui::swiper>
        </x-ui::container>
    </x-ui::section>

    <x-sections.structure variant="primary" />
    <x-colaborador.section />
</div>
