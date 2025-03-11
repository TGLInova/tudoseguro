<div>
    <x-ui::hero container-class="flex flex-col">
        <x-slot:image>
            <x-ui.hero-icon icon="icon-telefone" />
        </x-slot>
        <x-ui::section class="flex items-center h-full">
            <x-ui::container x-bind:class="{ '*:animate-fade-up': enable }">
                <x-ui::h1>Fale Conosco</x-ui::h1>
            </x-ui::container>
        </x-ui::section>
    </x-ui::hero>

    <x-contato.big-card variant="neutral" />
</div>
