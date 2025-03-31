<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ParceiroResource\Pages;
use App\Filament\Resources\ParceiroResource\RelationManagers;
use App\Models\Parceiro;
use Filament\Forms;
use Filament\Forms\Components as Fc;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class ParceiroResource extends Resource
{
    protected static ?string $model = Parceiro::class;

    protected static ?string $navigationIcon = 'icon-parceiro';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fc\Group::make([
                    Fc\FileUpload::make('caminho')->disk('public')->directory('midias/parceiros'),
                ])->relationship('imagem'),
                Fc\TextInput::make('nome')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // ImageColumn::make('imagem.caminho')->height(50),
                TextColumn::make('nome')->grow(true)->searchable(),
                ToggleColumn::make('ativo'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListParceiros::route('/'),
            'create' => Pages\CreateParceiro::route('/create'),
            'edit' => Pages\EditParceiro::route('/{record}/edit'),
        ];
    }
}
