<?php

namespace App\Filament\Resources\ContatoResource\Pages;

use App\Filament\Resources\ContatoResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewContato extends ViewRecord
{
    protected static string $resource = ContatoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
