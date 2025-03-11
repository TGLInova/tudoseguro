<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Sobre extends BasePageComponent
{
    public function render()
    {
        return view('livewire.pages.sobre')->layoutData([
            'image' => asset('static/img/banner-home-2.webp'),
            'description' => 'Desde 1988, somos referência no mercado de seguros, valorizando o esforço por trás do seu patrimônio.'
        ]);
    }
}
