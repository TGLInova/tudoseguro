<div>
    <form class="flex mb-16" wire:submit="$refresh">
        <x-ui::input placeholder="Pesquise um assunto..." wire:model="busca" />
        <x-ui::button variant="primary" type="submit">
            <x-icon name="heroicon-o-magnifying-glass" class="h-7 w-7" />
        </x-ui::button>
    </form>
    <div class="grid lg:grid-cols-3 gap-12">
        @foreach ($posts as $post)
            <x-post.card :$post wire:key="{!! sprintf('post-%d', $post->id) !!}" class="animate-fade-up" />
        @endforeach
    </div>
    <div class="text-center mt-8">
        <x-ui::button variant="primary" wire:click="$set('perPage', $wire.get('perPage') + 5)">
            Carregar mais
        </x-ui::button>
    </div>
</div>
