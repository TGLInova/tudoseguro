<?php

namespace App\View\Components\Colaborador;

use App\Models\Colaborador;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Section extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public bool $verMais = true, public ?string $titulo = null)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $colaboradores = Colaborador::oldest('ordem')->cursor();
        return view('components.colaborador.section', compact('colaboradores'));
    }
}
