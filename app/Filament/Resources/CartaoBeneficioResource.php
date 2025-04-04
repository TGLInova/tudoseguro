<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CartaoBeneficioResource\Pages;
use App\Filament\Resources\CartaoBeneficioResource\RelationManagers;
use App\Models\CartaoBeneficio;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists\Components as Ic;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use WallaceMaxters\Masker\Masker;

class CartaoBeneficioResource extends Resource
{
    protected static ?string $model = CartaoBeneficio::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?string $pluralModelLabel = 'Cartão de Benefícios';

    protected static ?string $modelLabel = 'Cartão de Benefício';

    protected static ?string $navigationGroup = 'Formulários';

    public static function infolist(Infolist $infolist): Infolist
    {
        $mask = new Masker;

        return $infolist->columns(1)->schema([
            Ic\TextEntry::make('nome'),
            Ic\TextEntry::make('cpf')
                ->label('CPF')
                ->formatStateUsing(static fn ($state) => $mask->mask($state, '000.000.000-00')),
            Ic\TextEntry::make('numero')
                ->formatStateUsing(static fn ($state) => $mask->mask($state, '0000 0000 0000 0000'))->label('Nº Cartão'),
        ]);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nome')->required(),
                Forms\Components\TextInput::make('cpf')->disabled()->required()->label('CPF')->mask('999.999.999-99'),
                TextInput::make('numero')->disabled()->mask('9999 9999 9999 9999'),
            ]);
    }

    public static function table(Table $table): Table
    {
        $mask = new Masker;

        return $table
            ->columns([
                TextColumn::make('numero')->formatStateUsing(static fn ($state) => $mask->mask($state, '0000 0000 0000 0000')),
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cpf')
                    ->formatStateUsing(static fn ($state) => $mask->mask($state, '000.000.000-00'))
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListCartaoBeneficios::route('/'),
            'create' => Pages\CreateCartaoBeneficio::route('/create'),
            'view' => Pages\ViewCartaoBeneficio::route('/{record}'),
            'edit' => Pages\EditCartaoBeneficio::route('/{record}/edit'),
        ];
    }
}
