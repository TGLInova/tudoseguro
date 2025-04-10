<?php

namespace App\View\Components\Colaborador;

use App\Models\Colaborador;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BusinessCard extends Component
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
        return view('components.colaborador.business-card');
    }
}
