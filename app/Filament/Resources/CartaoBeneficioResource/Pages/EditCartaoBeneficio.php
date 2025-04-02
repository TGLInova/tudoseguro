<?php

namespace App\Filament\Resources\CartaoBeneficioResource\Pages;

use App\Filament\Resources\CartaoBeneficioResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCartaoBeneficio extends EditRecord
{
    protected static string $resource = CartaoBeneficioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
