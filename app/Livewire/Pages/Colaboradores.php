<?php

namespace App\Livewire\Pages;

use App\Models\Colaborador;
use App\Models\ColaboradorGrupo;
use Livewire\Attributes\Layout;
use Livewire\Component;


class Colaboradores extends BasePageComponent
{
    public function render()
    {
        $colaboradores = Colaborador::cursor();

        $image = asset('static/img/equipe-3.webp');

        return view('livewire.pages.colaboradores', compact('colaboradores', 'image'))->layoutData([
            'title'       => 'Nossa Equipe',
            'image'       => $image,
            'description' => 'Conheça nosso time de especialistas prontos para ajudar você!'
        ]);
    }
}
