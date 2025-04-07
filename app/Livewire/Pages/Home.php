<?php

namespace App\Livewire\Pages;

use App\Models\Colaborador;
use App\Models\Parceiro;
use App\Models\Post;
use App\Models\Produto;
use App\Models\Testemunho;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Home extends BasePageComponent
{
    public function render()
    {
        $produtos = Produto::query()->web()->take(10)->cursor();

        $produtosDestaques = Produto::query()->web()->oldest('ordem')->where('destaque', true)->cursor();

        $testemunhos = Testemunho::query()->web()->cursor();

        $posts = Post::oldest('id')->publicado()->cursor();

        $parceiros = Parceiro::query()->web()->get();

        return view('livewire.pages.home', [
            'produtos'      => $produtos,
            'produtosDestaques' => $produtosDestaques,
            'posts'         => $posts,
            'testemunhos'   => $testemunhos,
            'parceiros'     => $parceiros
        ])->layoutData([
            'title'       => 'Início',
            'description' => 'Soluções em seguros para proteger a sua empresa!',
            'image'       => asset('static/img/banner-sobre.webp'),
        ]);
    }
}
