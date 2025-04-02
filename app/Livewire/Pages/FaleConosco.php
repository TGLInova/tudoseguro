<?php

namespace App\Livewire\Pages;

class FaleConosco extends BasePageComponent
{
    public function render()
    {
        return view('livewire.pages.fale_conosco')->layoutData([
            'title'       => 'Fale Conosco',
            'description' => 'Precisa de Ajuda? Fale com o nosso time de especialistas!',
            'image'       => asset('static/img/fale_conosco.webp'),
        ]);
    }
}
