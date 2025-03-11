<?php

namespace App\View\Components\Layouts;

use App\Models\ProdutoCategoria;
use Closure;
use Illuminate\Container\Attributes\Cache;
use Illuminate\Contracts\View\View;

class Main extends Base
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categorias = cache()->remember('produtoCategorias', 300, fn () => ProdutoCategoria::where('exibir_menu', '=', true)->get()->mapWithKeys(fn ($categoria) => [
            $categoria->nome => $categoria->url
        ])->toArray());

        $links = array_filter([
            'Home'          => route('home'),
            'Sobre'         => route('sobre'),
            'Blog'          => route('blog'),
            ...$categorias,
            'Colaboradores' => route('colaboradores'),
            'Contato'       => route('fale_consoco')
        ]);

        return view('components.layouts.main', [

            'links' => $links
        ]);
    }
}
