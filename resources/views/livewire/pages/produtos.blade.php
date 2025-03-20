<div>
    <x-ui::hero :image="asset('static/img/produtos.webp')" container-class="flex items-center" :variant="['metalic']">
        <x-ui::container>
            <x-ui::h1>Conheça nossos produtos</x-ui::h1>
        </x-ui::container>
    </x-ui::hero>
    <x-produto.grid :$produtos>
        <x-slot name="titulo">
            Tudo para garantir tranquilidade para <strong>sua família</strong> e <strong>sua empresa</strong>!
        </x-slot>
    </x-produto.grid>
    <x-contato.card />
</div>
