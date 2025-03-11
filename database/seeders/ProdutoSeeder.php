<?php

namespace Database\Seeders;

use App\Models\Midia;
use App\Models\Produto;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Casts\Json;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdutoSeeder extends Seeder
{

    public function run()
    {
        $produtos = Json::decode(File::get(__DIR__ . '/produtos.json'));

        foreach ($produtos as $item) {

            $produto = Produto::firstOrNew(['id' => $item['id']]);

            $imagem = Arr::pull($item, 'imagem');
            $url    = Arr::pull($item, 'url');


            $produto->fill($item)->save();

            $texto = @file_get_contents(__DIR__ . '/produtos/' . $produto->id . '.html');

            $produto->fill([
                'texto' => $texto
            ])->save();

            if ($imagem) {

                $caminho = 'produtos/' . $produto->id . '_' . basename($imagem);

                if (! Storage::disk('public')->exists($caminho)) {
                    Storage::disk('public')->put($caminho, file_get_contents($imagem));
                }

                $produto->imagem()->firstOrNew([])->fill([
                    'caminho' => $caminho,
                    'nome'    => basename($imagem)
                ])->save();
            }
        }
    }
}
