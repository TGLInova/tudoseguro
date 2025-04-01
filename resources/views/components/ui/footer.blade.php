<x-ui::section variant="primary" class="ui-footer">
    <x-ui::container>
        <div class="grid lg:grid-cols-4 lg:gap-24 gap-8 text-sm font-light">
            <div>
                <img src="{{ asset('static/img/logo-inverted.webp') }}" width="300" height="105"
                    class="lg:w-full w-48">
            </div>
            <div class="ui-footer-item lg:col-span-3 text-lg max-lg:flex-col">
                <div class="flex gap-2 items-center">
                    <x-icon name="icon-telefone" class="h-8 w-8 flex-none" />
                    <span><a href="tel:+55{{ $siteSettings->telefone }}">{{ $siteSettings->telefoneComMascara() }}</a> |
                        <a
                            href="tel:+55{{ $siteSettings->celular }}">{{ $siteSettings->celularComMascara() }}</a></span>
                </div>

                <div class="flex gap-2 items-center">
                    <x-icon name="heroicon-o-map-pin" class="h-8 w-8 flex-none" />
                    <span>{{ $siteSettings->endereco }}</span>
                </div>
            </div>
        </div>
        <p class="mt-12 text-xs">Tudo Seguro Corretora está autorizada a atuar em território nacional e inscrito no CNPJ
            sob n°
            03.908.570/0001-72. Atua em estrita observância ao Código de Defesa do Consumidor e à Legislação
            Securitária, devidamente registrada na Superintendência de Seguros Privados – SUSEP – sob o n° 202008408
            “Seguro, só com o corretor de seguros”.</p>
    </x-ui::container>
</x-ui::section>
<section class="py-6">
    <x-ui::container class="flex items-center gap-6">
        <div class="grid grid-cols-3 gap-4">
            @foreach (['facebook', 'instagram', 'linkedin'] as $item)
                <a href="{{ $siteSettings->$item ?? '#' }}">
                    <x-icon :name="'icon-' . $item" class="w-9" />
                </a>
            @endforeach
        </div>
        <div>
            <div>© Tudo Seguro Corretora | Todos os direitos reservados. Powered By Taigah</div>
        </div>
    </x-ui::container>
</section>
