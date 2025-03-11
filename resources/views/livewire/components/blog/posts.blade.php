<div>
    <x-ui::h2 class='text-center mb-12'>
        Confira mais <strong>novidades, notícias e atualizações</strong> do mercado
    </x-ui::h2>
    <div class="grid lg:grid-cols-3 gap-12">
        @foreach ($posts as $post)
            <x-post.preview-card :$post :wire:key="sprintf('post-%d', $post->id)" />
        @endforeach
    </div>
    <div class="text-center mt-8">
        <x-ui::button variant="primary" wire:click="$set('perPage', $wire.get('perPage') + 5)">
            Carregar mais
        </x-ui::button>
    </div>
</div>
