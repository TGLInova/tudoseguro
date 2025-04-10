<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            1 => [
                'destaque'        => true,
                'data_publicacao' => '2019-10-16',
                'titulo' => 'Descubra o seu perfil financeiro',
                'descricao' => 'Você sabe qual é o seu perfil financeiro? Não? Fique tranquilo, pois este artigo irá ajudá-lo a identificar seu perfil e aprimorar sua vida financeira.',
                'imagem'    => 'posts/1.webp',
            ],
        ];


        foreach ($items as $id => $item) {

            $item['texto'] = null;
            $item['usuario_id'] ??= 1;
            $imagem = Arr::pull($item, 'imagem');

            $file = __DIR__ . '/posts/' . $id . '.html';

            if (file_exists($file)) {
                $item['texto'] = file_get_contents($file);
            }

            $post = Post::firstOrNew(['id' => $id])->fill($item);

            $post->save();

            if ($imagem) {

                $caminho = 'posts/' . $post->id . '.' . pathinfo($imagem, PATHINFO_EXTENSION);

                if (! Storage::disk('public')->exists($caminho)) {
                    Storage::disk('public')->put($caminho, file_get_contents($imagem));
                }

                $post->imagem()->firstOrNew([])->fill([
                    'caminho' => $caminho,
                    'nome'    => basename($imagem)
                ])->save();
            }

        }
    }
}
