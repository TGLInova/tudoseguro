<?php

namespace App\Livewire\Pages;

use App\View\Components\Layouts\Main;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout(Main::class, ['image' => null, 'title' => null, 'description' => null])]
abstract class BasePageComponent extends Component
{
}
