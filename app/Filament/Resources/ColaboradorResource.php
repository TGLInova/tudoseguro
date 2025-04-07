<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ColaboradorResource\Pages;
use App\Filament\Resources\ColaboradorResource\RelationManagers;
use App\Models\Colaborador;
use Filament\Forms;
use Filament\Forms\Components as Fc;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Hash;

class ColaboradorResource extends Resource
{
    protected static ?string $model = Colaborador::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    protected static ?string $slug = 'colaboradores';

    protected static ?string $pluralModelLabel = 'Colaboradores';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(3)
            ->schema([
                Fc\Group::make([
                    Fc\FileUpload::make('caminho')->directory('midias/colaboradores')->image()->imageEditor()->imageCropAspectRatio('3:4')->required()
                ])->relationship('imagem')->columnSpanFull()->label('Imagem'),

                Forms\Components\TextInput::make('nome')
                    ->required()
                    ->live(onBlur: true)
                    ->maxLength(255),
                Forms\Components\TextInput::make('sobrenome')->required()->maxLength(255),
                Forms\Components\TextInput::make('cargo')->required()->maxLength(255),

                Fc\Fieldset::make('Redes Sociais')->columns(4)->schema([
                    Fc\TextInput::make('instagram')->prefixIcon('icon-instagram')->url(),
                    Fc\TextInput::make('linkedin')->prefixIcon('icon-linkedin')->url(),
                    Fc\TextInput::make('facebook')->prefixIcon('icon-facebook')->url(),
                    Fc\TextInput::make('whatsapp')->prefixIcon('icon-whatsapp')->mask('(99) 99999-9999')
                ]),

                Fc\Fieldset::make('Dados de Login')->relationship('usuario')->schema([
                    Fc\TextInput::make('nome')->required(),
                    Fc\TextInput::make('email')->required()->label('E-mail')->unique(ignoreRecord: true)->prefixIcon('heroicon-o-envelope'),
                    Fc\TextInput::make('password')
                        ->password()
                        ->revealable()
                        ->autocomplete('new-password')
                        ->dehydrateStateUsing(fn(string $state): string => Hash::make($state))
                        ->dehydrated(fn(?string $state): bool => filled($state))
                        ->label('Senha')
                        ->required(fn(string $operation): bool => $operation === 'create'),


                    Fc\TextInput::make('password_confirmation')->revealable()->password()->label('Confirmação de Senha'),
                ])

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
                    ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('sobrenome')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cargo')
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
            'index' => Pages\ListColaboradors::route('/'),
            'create' => Pages\CreateColaborador::route('/create'),
            'edit' => Pages\EditColaborador::route('/{record}/edit'),
        ];
    }
}
