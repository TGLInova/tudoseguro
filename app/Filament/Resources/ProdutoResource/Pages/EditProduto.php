<?php

namespace App\Filament\Resources\ProdutoResource\Pages;

use App\Filament\Resources\ProdutoResource;
use App\Models\Produto;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduto extends EditRecord
{
    protected static string $resource = ProdutoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('preview')->url(fn (Produto $record) => route('produto.show', ['produto' => $record]), true)->label('Visualizar')->color('gray'),
            Actions\DeleteAction::make(),
        ];
    }
}
