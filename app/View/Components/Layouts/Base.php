<?php

namespace App\View\Components\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Base extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public readonly ?string $bodyClass = null,
        public readonly ?string $htmlClass   = null,
        public readonly ?string $head        = null,
        public readonly ?string $title       = null,
        public ?string $canonical   = null,
        public readonly ?string $description = null,
        public readonly ?string $image       = null,
        string $url = null
    )
    {
        $this->canonical ??= url()->current();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layouts.base');
    }
}
