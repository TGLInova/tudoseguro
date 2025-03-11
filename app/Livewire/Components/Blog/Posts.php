<?php

namespace App\Livewire\Components\Blog;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $perPage = 9;

    public function render()
    {
        $posts = Post::with('imagem')
            ->take($this->perPage)
            ->latest('data_publicacao')
            ->publicado()
            ->get();

        return view('livewire.components.blog.posts', [
            'posts' => $posts
        ]);
    }
}
