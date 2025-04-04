<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Post;
use Filament\Tables;
use App\Models\Usuario;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Filament\Support\Colors\Color;
use Filament\Tables\Columns as Tc;
use Illuminate\Support\HtmlString;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ToggleColumn;
use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'icon-documento';

    protected static ?string $pluralModelLabel = 'Publicações';

    protected static ?string $modelLabel = 'Publicação';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(['lg' => 4])
            ->schema([
                Forms\Components\Group::make([
                    FileUpload::make('caminho')->directory('midias/posts')->image()->imageEditor(),
                ])->relationship('imagem')->columnSpanFull(),

                Forms\Components\TextInput::make('titulo')
                    ->columnSpan(['lg' => 2])
                    ->required()
                    ->maxLength(255),

                Forms\Components\Select::make('usuario_id')
                    ->relationship('usuario', 'nome', fn ($query) => $query->oldest('nome'))
                    ->searchable()
                    ->preload()
                    ->allowHtml()
                    ->getOptionLabelFromRecordUsing(function (Usuario $record) {
                        return <<<HTML
                            <div class="flex gap-3 items-center">
                                <img width="16" height="16" class="rounded-full object-cover" src="{$record->getFilamentAvatarUrl()}">
                                <div>{$record->nome}</div>
                            </div>
                        HTML;
                    })
                    ->label('Autor')
                    ->visible(fn() => Filament::auth()->user()->isAdmin()),

                Forms\Components\DateTimePicker::make('data_publicacao')->label('Data de Publicação'),
                Forms\Components\Textarea::make('descricao')->label('Descrição')->columnSpanFull()->maxLength(255),
                Forms\Components\RichEditor::make('texto')->columnSpanFull(),
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
                    ->color(function ($state) {

                        if ($state->gt(now())) {
                            return 'warning';
                        }

                        return 'success';
                    })
                    ->icon(function ($state) {

                        if ($state->gt(now())) {
                            return 'heroicon-o-clock';
                        }

                        return 'heroicon-o-check-circle';
                    })
                    ->sortable(),
                TextColumn::make('usuario')
                    ->label('Autor')
                    ->formatStateUsing(fn ($state) => $state?->nome)
                    ->placeholder('Não informado'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                // ToggleColumn::make('destaque')
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
