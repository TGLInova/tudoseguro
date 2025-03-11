<?php

namespace Database\Seeders;

use App\Models\ColaboradorGrupo;
use Illuminate\Database\Seeder;

class ColaboradorGrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $items = [
            1 => ['nome' => 'Diretoria e Gerência'],
            2 => ['nome' => 'Corretores de Seguros'],
            3 => ['nome' => 'Administrativo']
        ];

        foreach ($items as $id => $item) {

            $model = ColaboradorGrupo::firstOrNew(['id' => $id]);

            $model->fill($item)->save();
        }
    }
}
