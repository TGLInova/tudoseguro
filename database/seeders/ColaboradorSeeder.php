<?php

namespace Database\Seeders;

use App\Models\Colaborador;
use App\Models\Midia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            1 => [
                'nome'      => 'Wallace',
                'sobrenome' => 'Vizerra',
                'cargo'     => 'Programador',
                'imagem'    => 'midias/colaboradores/wallace.webp'
            ]
        ];


        foreach ($items as $id => $item) {

            $model = Colaborador::firstOrNew(['id' => $id]);

            if ($model->exists && !app()->isLocal()) continue;

            $model->timestamps = false;

            /**
             * @var Midia
             */
            $midia = Midia::firstOrNew([
                'caminho' => $item['imagem']
            ]);

            unset($item['imagem']);

            $model->fill($item)->save();

            $midia->model()->associate($model);

            $midia->save();

        }
    }
}
