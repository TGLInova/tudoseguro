<?php

namespace App\Livewire\Components\Blog;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $perPage = 9;

    public ?string $busca = null;

    public function render()
    {
        $posts = Post::with('imagem')
            ->take($this->perPage)
            ->latest('data_publicacao')
            ->when($this->busca, fn ($query, $busca) => $query->where('titulo', 'LIKE', "%{$busca}%"))
            ->publicado()
            ->get();

        return view('livewire.components.blog.posts', [
            'posts' => $posts
        ]);
    }
}
