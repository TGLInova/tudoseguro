<?php

namespace App\Livewire\Pages;

class FaleConosco extends BasePageComponent
{
    public function render()
    {
        return view('livewire.pages.fale_conosco')->layoutData([
            'title'       => 'Fale Conosco',
            'description' => 'Precisa de Ajuda? Fale com o nosso time de especialistas da Multiseg!',
            'image'       => asset('static/img/banner-home.webp'),
        ]);
    }
}
