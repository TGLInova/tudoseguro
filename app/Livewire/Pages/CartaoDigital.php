<?php

namespace App\Livewire\Pages;

use App\Models\Colaborador;

class CartaoDigital extends BasePageComponent
{
    public ?Colaborador $colaborador;

    public function render()
    {
        $colaboradores = Colaborador::get();

        $image = asset('static/img/equipe-3.webp');

        $index = $colaboradores->filter(fn ($x) => $x->getKey() == $this->colaborador?->getKey())->keys()->first();

        return view('livewire.pages.cartao-digital', compact('colaboradores', 'image', 'index'))->layoutData([
            'title'       => 'Nossa Equipe',
            'image'       => $image,
            'description' => 'Conheça nosso time de especialistas prontos para ajudar você!'
        ]);
    }
}
