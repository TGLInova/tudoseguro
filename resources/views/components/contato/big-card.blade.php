<x-ui::section :variant="$variant" x-data="{ enable: false }" x-intersect.half:enter="enable = true"
    x-intersect.half:leave="enable = false">
    <x-ui::container>
        <x-ui::h2 class="text-center mb-12 font-semibold" x-bind:class="{ 'animate-fade-up': enable }">
            Vamos proteger você e sua empresa?
        </x-ui::h2>

        <ul x-bind:class="{ '*:animate-fade-up': enable }" @class([
            'grid lg:grid-cols-3 gap-8',
            '[&>li>svg]:h-12 [&>li>svg]:w-12 [&>li>svg]:flex-none',
            '[&>li>svg]:p-2 [&>li>svg]:text-white [&>li>svg]:rounded-xs',
            '[&>li]:flex [&>li]:gap-5 lg:[&>li]:flex-col [&>li]:items-center lg:[&>li]:text-center',
            $variant === 'primary-400' ?  '[&>li>svg]:bg-primary-200' : '[&>li>svg]:bg-primary-500'
        ])>
            <li>
                <x-icon name="heroicon-o-phone" />
                <div>
                    <p>{{ $siteSettings->telefoneComMascara() }}</p>
                    <p>{{ $siteSettings->whatsappComMascara() }} (Exclusivamente Whatsapp)</p>
                </div>
            </li>
            <li>
                <x-icon name="heroicon-o-envelope" />
                <div>{{ $siteSettings->email }}</div>
            </li>
            <li>
                <x-icon name="heroicon-o-map-pin" />
                <div>{{ $siteSettings->endereco }}</div>
            </li>
        </ul>
        <div class="h-px bg-primary-200/50 my-12 duration-500" x-bind:class="enable ? 'w-full' : 'w-0'"></div>

        <div class="grid lg:grid-cols-2 gap-6">
            <iframe class="w-full h-full max-lg:hidden shadow-sm shadow-black/30"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.3030674573106!2d-43.94453991910017!3d-19.953752891172662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa65a9edbb6bcf1%3A0xcfedbb648a326127!2sMultiseg%20Corretora%20de%20Seguros%20Ltda.!5e0!3m2!1spt-BR!2sbr!4v1733506915913!5m2!1spt-BR!2sbr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" ></iframe>

            <div>
                @livewire('components.formulario-contato-completo', ['dark' => $variant === 'primary-400'])
            </div>
        </div>
    </x-ui::container>
</x-ui::section>
