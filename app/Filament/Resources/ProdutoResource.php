<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Produto;
use Filament\Forms\Get;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components as Fc;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Builder\Block;
use App\Filament\Resources\ProdutoResource\Pages;
use TomatoPHP\FilamentIcons\Components\IconColumn;
use TomatoPHP\FilamentIcons\Components\IconPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProdutoResource\RelationManagers;

class ProdutoResource extends Resource
{
    protected static ?string $model = Produto::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    protected static ?string $navigationGroup = 'Produtos';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(2)
            ->schema([
                Forms\Components\Group::make([
                    Forms\Components\FileUpload::make('caminho')->label('Imagem')->required()->directory('midias/produtos')->image()->imageEditor()
                ])->relationship('imagem')->columnSpanFull(),
                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->maxLength(100),
                IconPicker::make('icone')->searchable()->label('Ícone'),
                Forms\Components\Textarea::make('descricao')->maxLength(255)->columnSpanFull()->label('Descrição'),
                // Forms\Components\RichEditor::make('texto')->columnSpanFull(),

                Fieldset::make('Conteúdo')->columns(1)->statePath('metadados')->columnSpanFull()->schema([

                    Fc\Section::make()->compact()->heading('O que é?')->schema([
                        RichEditor::make('texto')->label(false)->disableToolbarButtons(['attachFiles']),
                    ]),

                    Fc\Section::make()->compact()->heading('Para quem é?')->collapsible()->schema([

                        Repeater::make('publico_alvo')->maxItems(3)->label(false)->grid(3)->schema([
                            IconPicker::make('icone')->label('Ícone'),
                            Fc\TextInput::make('titulo'),
                            Fc\Textarea::make('texto')
                        ])->formatStateUsing(fn($state) => empty($state) ? [['icone' => 'icon-familia', 'titulo' => 'Paes e Mães'], ['icone' => 'icon-autonomo', 'titulo' => 'Autônomos'], ['icone' => 'icon-foguete', 'titulo' => 'Empresários']] : $state),
                    ]),

                    Fc\Section::make()->compact()->collapsible()->heading('Benefícios')->columns(4)->statePath('beneficios')->schema([
                        Fc\TextInput::make('titulo')
                            ->columnSpanFull()
                            ->required()
                            ->label('Título')
                            ->suffixAction(
                                Fc\Actions\Action::make('refresh_title')
                                    ->icon('heroicon-o-arrow-path')
                                    ->action(function ($set, Get $get) {
                                        $set('titulo', 'Benefícios do ' . $get('data.nome', true));
                                    })
                            ),
                        Fc\RichEditor::make('texto')->columnSpan(3)->required()->disableToolbarButtons(['attachFiles']),
                        Fc\FileUpload::make('imagem')->directory('produtos/metadados')->maxSize(1024)->required()->image()->imageEditor(),
                    ]),

                    Fc\Section::make()
                        ->compact()
                        ->collapsible()
                        ->heading('Coberturas e Assistências')
                        ->columns(1)
                        ->schema([
                            Repeater::make('coberturas')
                                ->reorderable(false)
                                ->maxItems(2)
                                ->addActionLabel('Adicionar Coluna')
                                ->label(false)
                                ->grid(2)
                                ->schema([
                                    IconPicker::make('icone')->label('Ícone')->required(),
                                    Fc\TextInput::make('titulo')->required(),
                                    Fc\Repeater::make('itens')->simple(
                                        Fc\TextInput::make('texto')->required()
                                    )
                                ])->formatStateUsing(fn($state) => empty($state) ? [['titulo' => 'Coberturas', 'icone' => 'icon-seguranca'], ['titulo' => 'Assistências', 'icone' => 'icon-ferramentas']] : $state),
                        ])

                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('ordem')
            ->columns([
                TextColumn::make('nome')->searchable(),
                IconColumn::make('icone'),
                ToggleColumn::make('ativo'),
                ToggleColumn::make('destaque'),
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProdutos::route('/'),
            'create' => Pages\CreateProduto::route('/create'),
            'view' => Pages\ViewProduto::route('/{record}'),
            'edit' => Pages\EditProduto::route('/{record}/edit'),
        ];
    }
}
