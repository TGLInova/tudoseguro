<?php

namespace App\Livewire\Pages;

use App\Models\Colaborador;

class CartaoDigital extends BasePageComponent
{
    public ?Colaborador $colaborador;

    public function render()
    {
        $colaboradores = Colaborador::cursor();

        $image = asset('static/img/equipe-3.webp');

        return view('livewire.pages.cartao-digital', compact('colaboradores', 'image'))->layoutData([
            'title'       => 'Nossa Equipe',
            'image'       => $image,
            'description' => 'Conheça nosso time de especialistas prontos para ajudar você!'
        ]);
    }
}
