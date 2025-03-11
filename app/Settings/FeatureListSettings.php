<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class FeatureListSettings extends Settings
{
    public $titulo;

    public array $items = [];

    public static function group(): string
    {
        return 'feature_list';
    }
}
