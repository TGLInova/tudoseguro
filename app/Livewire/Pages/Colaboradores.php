<?php

namespace App\Livewire\Pages;

use App\Models\ColaboradorGrupo;
use Livewire\Attributes\Layout;
use Livewire\Component;


class Colaboradores extends BasePageComponent
{
    public function render()
    {
        $grupoColaboradores = ColaboradorGrupo::with('colaboradores')->get();

        return view('livewire.pages.colaboradores', compact('grupoColaboradores'))->layoutData([
            'title'       => 'Nossa Equipe',
            'image'       => asset('static/img/banner-home-2.webp'),
            'description' => 'Conheça nosso time de especialistas prontos para ajudar você!'
        ]);
    }
}
