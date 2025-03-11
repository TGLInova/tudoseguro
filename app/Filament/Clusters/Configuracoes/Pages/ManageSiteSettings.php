<?php

namespace App\Filament\Clusters\Configuracoes\Pages;

use App\Filament\Clusters\Concerns\HasSubNavigationPosition;
use App\Filament\Clusters\Configuracoes;
use App\Settings\SiteSettings;
use Filament\Forms;
use Filament\Forms\Components as Fc;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageSiteSettings extends SettingsPage
{
    use HasSubNavigationPosition;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    protected static string $settings = SiteSettings::class;

    protected static ?string $cluster = Configuracoes::class;

    protected static ?string $title = 'Informações do Site';

    public function form(Form $form): Form
    {
        return $form
            ->columns(3)
            ->schema([

                Fc\TextInput::make('telefone')->mask('(99)9999-9999')->prefixIcon('icon-telefone')->dehydrateStateUsing(fn ($state) => str($state)->replaceMatches('/\D+/', '')->toString()),
                Fc\TextInput::make('whatsapp')->mask('(99)99999-9999')->prefixIcon('icon-whatsapp')->dehydrateStateUsing(fn ($state) => str($state)->replaceMatches('/\D+/', '')->toString()),
                Fc\TextInput::make('email')->prefixIcon('heroicon-o-envelope')->label('E-mail'),
                Fc\TextInput::make('endereco')->columnSpanFull()->prefixIcon('heroicon-o-map-pin')->label('Endereço'),

                Fc\Fieldset::make('Redes Sociais')->columns(3)->schema([
                    Fc\TextInput::make('linkedin')->prefixIcon('icon-linkedin')->nullable(),
                    Fc\TextInput::make('facebook')->prefixIcon('icon-facebook')->nullable(),
                    Fc\TextInput::make('instagram')->prefixIcon('icon-instagram')->nullable()
                ])
            ]);
    }
}
