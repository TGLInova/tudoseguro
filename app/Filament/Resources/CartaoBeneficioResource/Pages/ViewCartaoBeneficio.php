<?php

namespace App\Filament\Resources\CartaoBeneficioResource\Pages;

use App\Filament\Resources\CartaoBeneficioResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCartaoBeneficio extends ViewRecord
{
    protected static string $resource = CartaoBeneficioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
