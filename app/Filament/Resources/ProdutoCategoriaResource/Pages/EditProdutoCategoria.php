<?php

namespace App\Filament\Resources\ProdutoCategoriaResource\Pages;

use App\Filament\Resources\ProdutoCategoriaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProdutoCategoria extends EditRecord
{
    protected static string $resource = ProdutoCategoriaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
