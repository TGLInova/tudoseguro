<div>
    <x-ui::hero container-class="flex flex-col" :variant="['primary', 'normal']" :image="asset('static/img/fale_conosco.webp')">
        <x-ui::section class="flex items-center h-full">
            <x-ui::container x-bind:class="{ '*:animate-fade-up': enable }" class="text-center">
                <x-ui::h1>
                    Entre em contato conosco
                </x-ui::h1>
                <p>Solicite ou entre em contato com a nossa equipe</p>
            </x-ui::container>
        </x-ui::section>
    </x-ui::hero>

    <x-contato.big-card variant="neutral" />
</div>
