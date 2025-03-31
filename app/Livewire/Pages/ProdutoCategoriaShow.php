<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use App\Models\Produto;
use App\Models\ProdutoCategoria;
use Livewire\Component;

class ProdutoCategoriaShow extends BasePageComponent
{
    public ProdutoCategoria $produtoCategoria;

    public ?string $slug = null;

    public function mount()
    {
        if ($this->slug !== $this->produtoCategoria->slug) {
            return $this->redirect($this->produtoCategoria->url, true);
        }
    }

    public function render()
    {
        $produtos = $this->produtoCategoria->produtos()->web()->get();

        $titulo = match ($this->produtoCategoria->getKey()) {
            1 => 'Proteção financeira para você e sua família!',
            2 => 'Proteja a sua empresa e cresça com segurança!',
            default => 'Conheça os nossos produtos!'
        };

        return view('livewire.pages.produto-categoria-show', compact('produtos', 'titulo'))->layoutData([
            'title'       => $this->produtoCategoria->titulo,
            'description' => $this->produtoCategoria->descricao,
            'image' => asset('static/img/banner-home.webp'),
        ]);
    }
}
