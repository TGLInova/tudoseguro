<?php

namespace App\Livewire\Pages;

class Sobre extends BasePageComponent
{
    public function render()
    {
        $valores = [
            [
                'titulo' => 'Propósito',
                'texto' => 'Conscientizar as pessoas da importância do seguro, garantindo a proteção familiar, saúde financeira e continuidade dos seus projetos de vida.'
            ],
            [
                'titulo' => 'Visão',
                'texto'  => 'Ser referência no ramo de Seguros no estado de Rondônia',
            ],
            [
                'titulo' => 'Valores',
                'texto' => '- ' . implode("\n- ", [
                    'Comprometimento',
                    'Transparência',
                    'Ética',
                    'Valorização das Pessoas',
                    'Respeito',
                ])
            ]
        ];

        return view('livewire.pages.sobre', ['valores' => $valores])->layoutData([
            'image' => asset('static/img/banner-home-2.webp'),
            'description' => 'Nosso propósito é Conscientizar as pessoas da importância do seguro, garantindo a proteção familiar, saúde financeira e continuidade dos seus projetos de vida.'
        ]);
    }
}
