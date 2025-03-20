<?php

namespace Database\Seeders;

use App\Models\Colaborador;
use App\Models\Midia;
use App\Models\Parceiro;
use App\Models\Post;
use App\Models\Testemunho;
use App\Models\User;
use App\Models\Usuario;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = Usuario::firstOrNew(['email' => 'wallacemaxters@gmail.com']);

        $user->exists || $user->fill(['password' => bcrypt('@Multi(seg)'), 'nome' => 'Wallace Vizerra'])->save();

        $this->call(ColaboradorGrupoSeeder::class);

        $this->call(ProdutoSeeder::class);

        $this->call(ColaboradorSeeder::class);

        $this->call(ParceiroSeeder::class);

        $this->call(PostCategoriaSeeder::class);

        $this->call(ProdutoCategoriaSeeder::class);

        $this->call(PostSeeder::class);

        if (app()->isLocal()) {
            Colaborador::count() > 2 || Colaborador::factory()->count(7)->hasImagem()->create();
            Testemunho::count() || Testemunho::factory()->count(8)->hasImagem()->create();
            Post::count() || Post::factory()->count(9)->has(Midia::factory()->state(fn () => ['caminho' => $this->cover()]), 'imagem')->create();
        }
    }

}
