<?php

namespace App\View\Components\Colaborador;

use App\Models\Colaborador;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public readonly Colaborador $colaborador)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $redesSociais = [
            'icon-whatsapp' => $this->colaborador->url_whatsapp,
            'icon-instagram' => $this->colaborador->instagram,
            'icon-linkedin' => $this->colaborador->linkedin
        ];

        return view('components.colaborador.card', [
            'redesSociais' => $redesSociais
        ]);
    }
}
