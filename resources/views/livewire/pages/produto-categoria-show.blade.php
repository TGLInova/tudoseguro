<div>
    <x-ui::hero container-class="flex flex-col" :image="$produtoCategoria->imagem?->url" :variant="['primary', 'normal']">
        <x-ui::section class="flex items-center h-full">
            <x-ui::container class="text-center" x-bind:class="{ '*:animate-fade-up': enable }">
                <x-ui::h1 class="mb-5">{{ $produtoCategoria->nome }}</x-ui::h1>
                <p class="animate-delay-500">{{ $produtoCategoria->descricao }}</p>
            </x-ui::container>
        </x-ui::section>
    </x-ui::hero>
    <x-produto.grid :$produtos titulo="Proteção financeira para você e sua família!" />
    <x-contato.card />
</div>
