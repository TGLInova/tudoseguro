<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Testemunho;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TestemunhoResource\Pages;
use App\Filament\Resources\TestemunhoResource\RelationManagers;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use IbrahimBougaoua\FilamentRatingStar\Columns\Components\RatingStar as RatingStarColumn;
use IbrahimBougaoua\FilamentRatingStar\Forms\Components\RatingStar as RatingStartInput;
use Nette\Utils\ImageColor;

class TestemunhoResource extends Resource
{
    protected static ?string $model = Testemunho::class;

    protected static ?string $navigationIcon = 'icon-quote';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([

                Forms\Components\Group::make([
                    FileUpload::make('caminho')
                        ->directory('midias/testemunhos')
                        ->image()
                        ->imageEditor()
                        ->imageResizeTargetHeight(300)
                        ->required()
                        ->imageResizeTargetWidth(300)
                ])->relationship('imagem'),

                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('texto')
                    ->required()
                    ->columnSpanFull(),

                RatingStartInput::make('avaliacao')->label('Avaliação')->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('ordem')
            ->defaultSort('ordem')
            ->columns([
                ImageColumn::make('imagem.caminho')->size(50)->circular(),
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                RatingStarColumn::make('avaliacao')->label('Avaliação'),
                ToggleColumn::make('ativo'),
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
            'index' => Pages\ListTestemunhos::route('/'),
            'create' => Pages\CreateTestemunho::route('/create'),
            'edit' => Pages\EditTestemunho::route('/{record}/edit'),
        ];
    }
}
