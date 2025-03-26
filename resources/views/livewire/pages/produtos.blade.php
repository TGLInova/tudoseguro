<div>
    <x-ui::hero :image="asset('static/img/produtos.webp')" container-class="flex items-center" :variant="['primary', 'normal']">
        <x-ui::container>
            <x-ui::h1>Conheça nossos produtos</x-ui::h1>
        </x-ui::container>
    </x-ui::hero>
    <x-produto.grid :$produtos>
        <x-slot name="titulo">
            Proteja <strong>sua família</strong> e <strong>sua empresa</strong>!
        </x-slot>
    </x-produto.grid>
    <x-contato.card />
</div>
