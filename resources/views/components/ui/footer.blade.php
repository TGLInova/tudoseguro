<x-ui::section variant="primary" class="ui-footer">
    <x-ui::container>
        <div class="grid lg:grid-cols-4 gap-12 text-sm font-light">
            <div>
                <img src="{{ asset('static/img/logo-inverted.webp') }}">
            </div>
            <div class="ui-footer-item">
                <strong class="ui-footer-item-title">Mapa do Site:</strong>
                <nav class="flex flex-wrap lg:flex-col gap-2">
                    @foreach ($links as $text => $url)
                        <a href="{{ $url }}" class="underline hover:text-primary-200">{{ $text }}</a>
                    @endforeach
                </nav>
            </div>
            <div class="ui-footer-item">
                <strong class="ui-footer-item-title">Contato:</strong>
                <nav class="flex flex-col space-y-6">
                    <a target="_blank" rel="noopener nofollow"
                        href="https://www.google.com/maps/place/{{ urlencode($siteSettings->endereco) }}">{{ $siteSettings->endereco }}</a>
                    <div class="flex flex-col">
                        <a href="tel:{{ $siteSettings->telefone }}">{{ $siteSettings->telefoneComMascara() }}</a>
                        <a href="{{ $siteSettings->urlWhatsapp() }}" rel="noopener nofollow"
                            target="_blank">{{ $siteSettings->whatsappComMascara() }} (Exclusivamente Whatsapp)</a>
                    </div>
                    <a href="mailto:{{ $siteSettings->email }}">{{ $siteSettings->email }}</a>

                    <strong>Redes Sociais</strong>
                    <div class="flex gap-4">
                        @foreach ($redesSociais as $k => $v)
                            <a href="{{ $v }}" target="_blank" rel="noopener nofollow">
                                <x-icon class="h-6 w-6" :name="$k" />
                            </a>
                        @endforeach
                    </div>
                </nav>
            </div>
            <div class="ui-footer-item">
                <strong class="ui-footer-item-title">Produtos:</strong>
                <nav class="flex flex-col space-y-2">
                    @foreach ($produtos as $produto)
                        <a href="{{ $produto->url }}" wire:navigate
                            class="underline hover:text-primary-200">{{ $produto->nome }}</a>
                    @endforeach
                </nav>
            </div>
        </div>
    </x-ui::container>
</x-ui::section>
