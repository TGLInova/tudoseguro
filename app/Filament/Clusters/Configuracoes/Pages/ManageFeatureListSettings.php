<?php

namespace App\Filament\Clusters\Configuracoes\Pages;

use App\Filament\Clusters\Concerns\HasSubNavigationPosition;
use App\Filament\Clusters\Configuracoes;
use App\Settings\FeatureListSettings;
use App\Settings\SiteSettings;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use TomatoPHP\FilamentIcons\Components\IconPicker;

class ManageFeatureListSettings extends SettingsPage
{
    use HasSubNavigationPosition;

    protected static ?string $navigationIcon = 'heroicon-o-list-bullet';

    protected static string $settings = FeatureListSettings::class;

    protected static ?string $cluster = Configuracoes::class;

    protected static ?string $title = 'Feature List';

    public function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                MarkdownEditor::make('titulo')->maxLength(255)->disableToolbarButtons(['attachFiles', 'heading']),
                Repeater::make('items')->grid(['lg' => 2])->maxItems(4)->deletable(false)->minItems(4)->schema([
                    TextInput::make('titulo'),
                    IconPicker::make('icone')->searchable(),
                    Textarea::make('texto')
                ])
            ]);
    }
}
