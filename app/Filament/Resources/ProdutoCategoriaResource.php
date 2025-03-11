<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProdutoCategoriaResource\Pages;
use App\Filament\Resources\ProdutoCategoriaResource\RelationManagers;
use App\Models\ProdutoCategoria;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use TomatoPHP\FilamentIcons\Components\IconColumn;
use TomatoPHP\FilamentIcons\Components\IconPicker;

class ProdutoCategoriaResource extends Resource
{
    protected static ?string $model = ProdutoCategoria::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Produtos';

    protected static ?string $pluralModelLabel = 'Categorias';

    protected static ?string $modelLabel = 'Categoria';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make([
                    FileUpload::make('caminho')->label('Imagem')->image()->imageEditor(),
                ])->relationship('imagem')->columnSpanFull(),
                Forms\Components\TextInput::make('nome')->required(),
                IconPicker::make('icone')->searchable(),
                Forms\Components\Textarea::make('descricao')->label('Descrição')->columnSpanFull(),
                Forms\Components\Toggle::make('exibir_menu')->label('Exibir no Menu?')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descricao')
                    ->searchable(),
                Tables\Columns\IconColumn::make('exibir_menu')
                    ->boolean(),
                IconColumn::make('icone'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->iconButton(),
                Tables\Actions\Action::make('url')->url(fn ($record) => $record->url, true)->icon('heroicon-o-eye')->iconButton(),
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
            'index' => Pages\ListProdutoCategorias::route('/'),
            'create' => Pages\CreateProdutoCategoria::route('/create'),
            'edit' => Pages\EditProdutoCategoria::route('/{record}/edit'),
        ];
    }
}
