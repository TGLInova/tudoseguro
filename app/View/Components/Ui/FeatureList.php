<?php

namespace App\View\Components\Ui;

use App\Settings\FeatureListSettings;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeatureList extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public readonly bool $dark = true, public ?string $title = null)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $settings = app(FeatureListSettings::class);

        return  fn ($attributes) => view('components.ui.feature-list', [
            'items' => $settings->items,
            'titulo' => $attributes['title'] ?? str($settings->titulo)->inlineMarkdown(),
        ]);
    }
}
