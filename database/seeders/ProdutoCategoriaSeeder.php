<?php

namespace Database\Seeders;

use App\Models\ProdutoCategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            1 => ['nome' => 'Para Você', 'exibir_menu' => true, 'descricao' => 'Seguros para cuidar de você e sua família'],
            2 => ['nome' => 'Para Sua Empresa', 'exibir_menu' => true, 'descricao' => 'Seguros para cuidar da sua empresa.' ],
        ];


        $map_produtos = [
            1 => [2, 3],
            2 => [5, 6, 7]
        ];

        foreach ($items as $id => $item) {

            $model = ProdutoCategoria::firstOrNew(['id' => $id])->fill($item);

            $model->save();

            $model->produtos()->sync((array) $map_produtos[$id] ?? []);

            $model->imagem()->firstOrNew([])->fill([
                'caminho' => match ($id) {
                    1 => 'categorias/para-sua-familia.webp',
                    2 => 'categorias/para-sua-empresa.php',
                }
            ])->save();
        }
    }
}
