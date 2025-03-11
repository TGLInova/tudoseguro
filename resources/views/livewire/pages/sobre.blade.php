<div>
    <x-ui::hero :image="asset('/static/img/banner-sobre.webp')" container-class="flex flex-col">
        <x-ui::container class="flex justify-center max-lg:flex-col items-center gap-8 grow" x-bind:class="{'*:animate-fade-up': enable}">
            <div class="text-2xl whitespace-nowrap">Nossa Missão:</div>
            <div class="animate-delay-500 text-3xl font-semibold max-lg:text-center">
                Proteger financeiramente você, sua empresa, sua família e seu patrimônio.
            </div>
        </x-ui::container>
    </x-ui::hero>

    <x-ui::section variant="neutral" x-data="{enable: false}" x-intersect.half:leave="enable = false" x-intersect.half:enter="enable = true">
        <x-ui::container class="grid lg:grid-cols-2 gap-8 items-center">
            <div class="space-y-4" x-bind:class="{'*:animate-fade-up': enable}">
                <h1 class="text-3xl font-semibold">
                    Somos a <strong>Multiseg Corretora</strong> de Seguros
                </h1>
                <p class="animate-delay-[100ms]">
                    Desde 1988, somos referência no mercado de seguros, valorizando o esforço por trás do seu
                    patrimônio.
                </p>
                <p class="animate-delay-[150ms]">

                    Trabalhamos com as principais seguradoras para oferecer soluções personalizadas, sempre com
                    excelência.
                </p>
                <p class="animate-delay-[200ms]">
                    Nosso atendimento especializado acompanha todas as etapas da contratação, garantindo coberturas sob
                    medida para você, sua família e seu negócio.</p>
            </div>
            <div>
                <img alt="Multiseg" title="Multiseg" width="560" height="359" loading="eager" class="animate-delay-700 w-full h-full object-cover" src="{{ asset('static/img/multiseg.webp') }}" x-bind:class="{'animate-fade-right' : enable}">
            </div>
        </x-ui::container>
    </x-ui::section>

    <x-ui.feature-list :dark="false">
        <x-slot name="title">
            A <strong>Multiseg Seguros</strong> conta com:
        </x-slot>
    </x-ui.feature-list>

    <x-ui::section variant="neutral"  x-data="{enable: false}" x-intersect.half:leave="enable = false" x-intersect.half:enter="enable = true">
        <x-ui::container>
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <figure class="bg-neutral-300 animate-delay-[300ms] w-full block" x-bind:class="{'animate-fade' : enable}">
                    <img alt="Alexandre Faria" class='w-full object-center object-cover' width="552" height="353" src="{{ asset('static/img/alexandre-faria.webp') }}" loading="eager">
                </figure>
                <div x-bind:class="{ '*:animate-fade-up' : enable }">
                    <x-ui::h3 class='mb-12 animate-delay-[700ms] text-primary-600' >
                        O que a <strong>Multiseg</strong> representa?
                    </x-ui::h3>

                    <p class="font-semibold mb-5 animate-delay-[750ms]">"Desde 1988, a Multiseg Seguros tem como missão proteger sonhos e patrimônios com excelência. </p>

                    <p class="animate-delay-[800ms] mb-5">
                        Nossa trajetória é marcada por dedicação, ética e inovação, sempre ao lado das principais
                        seguradoras do mercado. Com foco em soluções personalizadas e atendimento humano, temos orgulho
                        de
                        construir confiança e segurança para nossos clientes. Continuamos firmes no propósito de
                        proteger
                        conquistas e histórias de vida."
                    </p>

                    <p class="flex items-center gap-3 animate-delay-[850ms]">
                        <x-icon name="icon-quote" class="text-primary-200 h-8" />
                        <strong>Alexandre Faria, </strong> Fundador e CEO.
                    </p>
                </div>
            </div>
        </x-ui::container>
    </x-ui::section>
</div>
