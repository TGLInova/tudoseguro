<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContatoResource\Pages;
use App\Filament\Resources\ContatoResource\RelationManagers;
use App\Models\Contato;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContatoResource extends Resource
{
    protected static ?string $model = Contato::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationGroup = 'Formulários';

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            TextEntry::make('nome'),
            TextEntry::make('telefone'),
            TextEntry::make('assunto')->placeholder('Não Informado'),
            TextEntry::make('email'),
            TextEntry::make('mensagem')->columnSpanFull()
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefone')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('email')
                //     ->searchable(),
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
            'index' => Pages\ListContatos::route('/'),
            'create' => Pages\CreateContato::route('/create'),
            'view' => Pages\ViewContato::route('/{record}'),
            'edit' => Pages\EditContato::route('/{record}/edit'),
        ];
    }
}
