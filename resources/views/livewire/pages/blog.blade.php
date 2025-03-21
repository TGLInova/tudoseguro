<div>
    <x-ui::hero container-class="flex flex-col" :image="asset('static/img/blog.webp')" :variant="['primary', 'normal']">
        <x-ui::section class="flex items-center h-full">
            <x-ui::container class="text-center" x-bind:class="{ '*:animate-fade-up': enable }">
                <x-ui::h1 class="mb-5">Blog Tudo Seguro</x-ui::h1>
                <p class="animate-delay-500">
                    Notícias, novidade e as últimas tendências do mercado
                </p>
            </x-ui::container>
        </x-ui::section>
    </x-ui::hero>

    <x-ui::section variant="neutral">
        <x-ui::container>
            <livewire:components.blog.posts :key="1" />
        </x-ui::container>
    </x-ui::section>

    <x-colaborador.section />

    <x-contato.card :subtitle-on-top="true" subtitle="Gostou de algum artigo e quer saber mais?" />
</div>
