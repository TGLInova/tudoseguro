<?php

namespace App\View\Components\Contato;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $subtitle = 'Preencha o formulário ou clique no botão de WhatsApp.',
        public bool $subtitleOnTop = false,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contato.card', [
            'whatsapp' => sprintf('https://wa.me/%s', preg_replace('/\D+/', '', config('site.whatsapp')))
        ]);
    }
}
