<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use App\Models\Produto;
use Livewire\Component;

class PostShow extends BasePageComponent
{
    public Post $post;
    public ?string $slug = null;

    public function mount()
    {
        if ($this->slug !== $this->post->slug) {
            return redirect($this->post->url);
        }
    }

    public function render()
    {
        return view('livewire.pages.post-show')->layoutData([
            // 'darkNavbar'  => false,
            'title'       => $this->post->titulo,
            'description' => $this->post->descricao,
            'image'       => $this->post->imagem?->url,
        ]);
    }
}
