<?php

namespace Database\Seeders;

use App\Models\PostCategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            1 => ['nome' => 'Seguro de Vida'],
            2 => ['nome' => 'Seguro Viagem'],
            3 => ['nome' => 'Finanças'],
        ];

        foreach ($items as $id => $item) {

            PostCategoria::firstOrNew(['id' => $id])->fill($item)->save();
        }
    }
}
