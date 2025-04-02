<?php

namespace App\Livewire\Pages;

class Blog extends BasePageComponent
{
    public int $page = 1;

    public function render()
    {
        return view('livewire.pages.blog')->layoutData([
            'image' => asset('static/img/blog.webp'),
            'title' => 'Blog Tudo Seguro',
            'darkNavbar' => false,
            'description' => 'Notícias, novidade e as últimas tendências do mercado.'
        ]);
    }
}
