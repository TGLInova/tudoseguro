<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Facades\Filament;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns as Tc;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(4)
            ->schema([
                Forms\Components\Group::make([
                    FileUpload::make('caminho')->directory('midias/posts'),
                ])->relationship('imagem')->columnSpanFull(),
                Forms\Components\TextInput::make('titulo')
                    ->columnSpan(2)
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('usuario_id')
                    ->searchable()
                    ->preload()
                    ->relationship('usuario', 'nome')
                    ->label('Autor')
                    ->visible(fn() => Filament::auth()->user()->isAdmin()),

                Forms\Components\DateTimePicker::make('data_publicacao')->label('Data de Publicação'),
                Forms\Components\Textarea::make('descricao')->label('Descrição')->columnSpanFull()->maxLength(255),
                Forms\Components\RichEditor::make('texto')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo')->searchable(),
                Tables\Columns\TextColumn::make('data_publicacao')
                    ->dateTime()
                    ->label('Data da Publicação')
                    ->sortable(),
                TextColumn::make('postCategoria.nome')->badge()->label('Categoria')->placeholder('Não informada'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                ToggleColumn::make('destaque')
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
