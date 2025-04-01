<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Facades\Filament;
use Filament\Widgets\Widget;

class PostsAgendadosWidget extends Widget
{
    protected static bool $isLazy = false;

    protected static string $view = 'filament.widgets.posts-agendados-widget';

    protected function getViewData(): array
    {
        return [
            'posts' => Post::agendados()->acessiveis(Filament::auth()->user())->count()
        ];
    }
}
