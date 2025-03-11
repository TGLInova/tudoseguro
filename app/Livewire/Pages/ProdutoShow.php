<?php

namespace App\Livewire\Pages;

use App\Models\Produto;
use Livewire\Component;

class ProdutoShow extends BasePageComponent
{
    public Produto $produto;

    public function render()
    {
        return view('livewire.pages.produto-show')->layoutData([]);
    }
}
