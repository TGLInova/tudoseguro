<?php

namespace App\View\Components\Contato;

use App\Settings\SiteSettings;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BigCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $variant = 'primary-400')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.contato.big-card', [
            'siteSettings' => app(SiteSettings::class)
        ]);
    }
}
