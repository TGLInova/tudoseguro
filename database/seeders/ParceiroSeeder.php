<?php

namespace Database\Seeders;

use App\Models\Midia;
use App\Models\Parceiro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParceiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            1 => ['nome' => 'Allianz', 'imagem' => 'midias/parceiros/allianz.png'],
            2 => ['nome' => 'HDI Seguros', 'imagem' => 'midias/parceiros/hdi-seguros.png'],
            3 => ['nome' => 'Sulamérica', 'imagem' => 'midias/parceiros/sulamerica.png'],
            4 => ['nome' => 'Icatu', 'imagem' => 'midias/parceiros/icatu.png'],
            5 => ['nome' => 'Metlife', 'imagem' => 'midias/parceiros/metlife.png'],
            6 => ['nome' => 'Bradesco', 'imagem' => 'midias/parceiros/bradesco.png'],
        ];

        foreach ($items as $id => $item) {

            /**
             * @var Parceiro
             */
            $parceiro = Parceiro::firstOrNew(['id' => $id]);

            $parceiro->timestamps = false;

            $imagem = $item['imagem'];

            unset($item['imagem']);

            $parceiro->fill($item)->save();

            $midia = Midia::firstOrNew(['caminho' => $imagem]);

            $midia->fill([
                'caminho' => $imagem,
                'nome'    => basename($imagem)
            ]);

            $midia->model()->associate($parceiro);

            $midia->save();
        }
    }
}
