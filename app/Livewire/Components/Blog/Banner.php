<?php

namespace App\Livewire\Components\Blog;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Banner extends Component
{
    public $postDestaqueId = null;


    #[Computed]
    public function postDestaque()
    {
        return Post::find($this->postDestaqueId);
    }

    public function render()
    {
        $posts = Post::query()->publicado()->where('destaque', true)->take(5)->get();

        if ($this->postDestaque === null) {
            $this->postDestaqueId = $posts->first()?->id;
        }

        return view('livewire.components.blog.banner', [
            'posts' => $posts
        ]);
    }
}
