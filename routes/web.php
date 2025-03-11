<?php

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages;

Route::get('/', Pages\Home::class)->name('home');
Route::get('/sobre', Pages\Sobre::class)->name('sobre');
Route::get('/produtos', Pages\Produtos::class)->name('produtos');
Route::get('/produto/{produto}/{slug?}', Pages\ProdutoShow::class)->name('produto.show');
Route::get('/colaboradores', Pages\Colaboradores::class)->name('colaboradores');
Route::get('/blog', Pages\Blog::class)->name('blog');
Route::get('/blog/{post}/{slug?}', Pages\PostShow::class)->name('post.show');
Route::get('/categoria/{produtoCategoria}/{slug?}', Pages\ProdutoCategoriaShow::class)->name('produto_categoria.show');
Route::get('/contato', Pages\FaleConosco::class)->name('fale_consoco');
