<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Arr;
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
                'titulo' => 'Como a parceria com a Multiseg Seguros pode otimizar os resultados da sua empresa',
                'descricao' => 'Listamos pelo menos 3 fatores que explicam como a Multiseg Seguros, referência no mercado securitário, pode impulsionar os resultados da sua empresa.',
                'imagem'    => 'https://www.multisegseguros.com.br/wp-content/uploads/2019/10/como-aparcewria-coom-a-multiseg-seguros-pode-otimiza-os-resultado-da-sua-empresa.png',
            ],
            2 => [
                'destaque'        => true,
                'data_publicacao' => '2019-10-02',
                'titulo'          => 'Risco Cibernético: uma das principais preocupações dos executivos',
                'descricao'       => 'Entenda melhor o que você pode saber para proteger sua empresa e seus colaboradores do risco cibernético, cada vez mais comum.',
                'imagem'          => 'https://www.multisegseguros.com.br/wp-content/uploads/2019/10/porque-o-risco-cibernetico-%C3%A9-hoje-uma-das-pincipais-preocupa%C3%A7%C3%B5es-dos-executivos.png'
            ],

            3 => [
                'data_publicacao'   => '2019-10-01',
                'titulo' => '6 razões para contratar a Multiseg Seguros',
                'descricao' => 'Difícil foi reduzir a apenas 6 todas as vantagens que sua empresa pode ter ao contar com a expertise da Multiseg Seguros. Confira.',
                'imagem' => 'https://www.multisegseguros.com.br/wp-content/uploads/2019/10/SEGUROS-BH-DICAS-QUE-SO-UM-BOM-CORRETOR-PODE-TE-DAR.png'
            ],

            4 => [
                'data_publicacao' => '2019-09-25',
                'titulo' => 'Seguro contra Riscos Ambientais: o que é e para que ele serve?',
                'descricao' => 'Seguro contra Riscos Ambientais. Saiba mais sobre como esse produto pode ser importante para proteger a sua empresa e a natureza.',
                'imagem' => 'https://www.multisegseguros.com.br/wp-content/uploads/2019/09/SEGURO-CONTRA-RISCOS-AMBIENTAIS-O-QUE-%C3%89-E-PARA-QUE-ELE-SERVE.png'
            ],
            5 => [
                'data_publicacao' => '2019-09-25',
                'imagem' => 'https://www.multisegseguros.com.br/wp-content/uploads/2019/09/VALE-A-PENA-CONTRATAR-UM-SEGURO-SAUDE-EMPRESARIAL.png',
                'titulo' => 'Vale a pena contratar um seguro de saúde empresarial?',
                'descricao' => 'Entenda os benefícios de um Seguro Saúde Empresarial para o seu negócio, com a corretora que já está há mais de 30 anos no mercado.'
            ],

            6 => [
                // 'slug' => 'o-que-e-seguro-garantia'
                'data_publicacao' => '2019-09-11',
                'imagem' => 'https://www.multisegseguros.com.br/wp-content/uploads/2019/09/O-QUE-%C3%89-UM-SEGRO-GARANTIA-E-PARA-QUE-ELE-SERVE.png',
                'titulo' => 'O que é Seguro Garantia e para que ele serve?',
                'descricao' => 'Você realmente sabe o que é para que serve o Seguro Garantia? Entenda mais sobre todos os benefícios desse produto neste artigo.'
            ],

            7 => [
                'data_publicacao' => '2019-09-10T18:06:44+00:00',
                'imagem' => 'https://www.multisegseguros.com.br/wp-content/uploads/2019/09/QUAIS-AS-FORMAS-AS-EMPRESA-TEM-DE-SE-RESGUARDAR.png',
                'titulo' => 'Como as empresas podem se resguardar contra imprevistos?',
                'descricao' => 'Imprevistos acontecem. Por isso, conheça a variedade de seguros que podem garantir a longevidade da sua empresa no mercado.'
            ],
            8 => [
                'data_publicacao' => '2019-08-29T16:13:14+00:00',
                'imagem' => 'https://www.multisegseguros.com.br/wp-content/uploads/2019/08/SEGURO-BIKE.png',
                'titulo' => 'Seguro Bike: por que você precisa de um?',
                'descricao' => 'O Seguro Bike tem sido cada vez mais procurado por quem gosta de fazer trilhas e esportes radicais. Neste post, você sabe mais sobre esse produto.'
            ],
            9 => [
                'imagem'          => 'https://www.multisegseguros.com.br/wp-content/uploads/2019/08/COMO-PROTEGER-SUA-EPRESA-NA-ERA-DA-TECNOLOGIA.png',
                'data_publicacao' => '2019-08-22T19:52:42+00:00',
                'titulo'          => 'Como proteger sua empresa na era da tecnologia',
                'descricao'       => 'Riscos cibernéticos: uma realidade enfrentada por todas as empresas em plena era da tecnologia. Neste artigo, você descobre como se prevenir quanto a ele.',

            ],

            10 => [
                'data_publicacao' => '2019-04-25T12:02:26+00:00',
                'imagem' => 'https://www.multisegseguros.com.br/wp-content/uploads/2019/04/importancia-e-beneficios-de-colaborador-feliz-no-trabalho.jpg',
                'titulo' => 'A importância e os benefícios de um colaborador feliz no trabalho',
            ],

            11 => [
                'data_publicacao' => '2019-04-23T19:00:44+00:00',
                'titulo' => 'Quais as principais coberturas do Seguro Transporte?',
                'descricao' => '',
                'imagem' => 'https://www.multisegseguros.com.br/wp-content/uploads/2019/04/principais-coberturas-do-seguro-transporte.jpg',
            ],

            12 => [
                'imagem' => 'https://www.multisegseguros.com.br/wp-content/uploads/2019/04/como-anda-o-sus-brasileiro.jpg',
                'titulo' => 'Como anda (de verdade) o setor público de saúde brasileiro?'
            ]
        ];


        foreach ($items as $id => $item) {

            $item['texto'] = null;
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
