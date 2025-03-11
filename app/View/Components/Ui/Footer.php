<?php

namespace App\View\Components\Ui;

use App\Models\Produto;
use App\Settings\SiteSettings;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public array $links = [])
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $siteSettings = app(SiteSettings::class);

        return view('components.ui.footer', [
            'produtos' => Produto::oldest('nome')->get(),
            'siteSettings' => $siteSettings,
            'redesSociais' => array_filter([
                'icon-facebook'  => $siteSettings->facebook,
                'icon-instagram' => $siteSettings->instagram,
                'icon-linkedin'  => $siteSettings->linkedin
            ])
        ]);
    }
}
