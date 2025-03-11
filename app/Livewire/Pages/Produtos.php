<?php

namespace App\Livewire\Pages;

use App\Models\Produto;
use Livewire\Component;
use Livewire\WithPagination;

class Produtos extends BasePageComponent
{

    public Produto $produto;

    public function render()
    {
        $produtos = Produto::oldest('ordem')->ativo(true)->get();

        return view('livewire.pages.produtos', [
            'produtos' => $produtos
        ]);
    }
}
