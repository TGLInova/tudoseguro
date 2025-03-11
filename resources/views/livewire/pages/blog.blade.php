<div>
    <x-ui::section variant="neutral">
        <x-ui::container>
            <livewire:components.blog.banner />
        </x-ui::container>
    </x-ui::section>

    <x-ui::section variant="grey">
        <x-ui::container>
            <livewire:components.blog.posts />
        </x-ui::container>
    </x-ui::section>

    <x-contato.card :subtitle-on-top="true" subtitle="Gostou de algum artigo e quer saber mais?" />
</div>
