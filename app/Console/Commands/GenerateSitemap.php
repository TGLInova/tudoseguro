<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\Produto;
use App\Models\ProdutoCategoria;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria o sitemap da aplicação';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $path = public_path('sitemap.xml');

        $postUrls = Post::query()
            ->with('imagem')
            ->publicado()
            ->get(['titulo', 'id', 'updated_at'])
            ->map(function (Post $post) {
                $url = Url::create($post->url)
                    ->setLastModificationDate($post->updated_at);

                if ($post->imagem) {
                    $url->addImage($post->imagem->url);
                }

                return $url;
            });


        $produtosUrls = Produto::query()
            ->with('imagem')
            ->web()
            ->get(['nome', 'id', 'updated_at'])
            ->map(static function (Produto $produto) {
                $url = Url::create($produto->url)->setLastModificationDate($produto->updated_at ?? now());

                if ($produto->imagem) {
                    $url->addImage($produto->imagem->url);
                }

                return $url;
            });


        $categoriasUrls = ProdutoCategoria::query()
            ->where('exibir_menu', true)
            ->get()
            ->map(static function (ProdutoCategoria $categoria) {

                $url = Url::create($categoria->url);

                return $url;
            });

        Sitemap::create()
            ->add($this->getStaticUrls())
            ->add($postUrls)
            ->add($produtosUrls)
            ->add($categoriasUrls)
            ->writeToFile($path);
    }

    public function getStaticUrls()
    {
        return [
            route('home'),
            route('sobre'),
            route('blog'),
            route('colaboradores'),
            route('fale_consoco'),
            route('produtos'),
        ];
    }
}
