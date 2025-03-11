<?php

namespace App\Filament\Clusters\Concerns;

use Filament\Pages\Concerns\HasSubNavigation;
use Filament\Pages\SubNavigationPosition;

trait HasSubNavigationPosition
{
    public function getSubNavigationPosition(): SubNavigationPosition
    {
        return SubNavigationPosition::Top;
    }
}
