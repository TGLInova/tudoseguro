<?php

namespace App\Livewire\Pages;

class Blog extends BasePageComponent
{
    public function render()
    {

        return view('livewire.pages.blog')->layoutData([
            'image' => asset('static/img/banner-home-2.webp'),
            'title' => 'Blog',
            'darkNavbar' => false,
            'description' => 'Confira mais novidades, notícias e atualizações do mercado.'
        ]);
    }
}
