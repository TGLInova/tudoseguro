<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ProdutoCategoria extends Model
{
    public $timestamps = false;

    protected $table = 'produto_categorias';

    protected $fillable = ['nome', 'icone', 'exibir_menu', 'descricao'];

    protected $casts = [
        'exibir_menu' => 'bool'
    ];

    public function produtos(): BelongsToMany
    {
        return $this->belongsToMany(Produto::class, 'produtos_produto_categorias');
    }

    public function url(): Attribute
    {
        return Attribute::make(get: fn () => route('produto_categoria.show', [
            'produtoCategoria' => $this->id,
            'slug'             => $this->slug,
        ]));
    }


    public function slug(): Attribute
    {
        return Attribute::make(get: fn () => Str::slug($this->nome));
    }

    public function imagem()
    {
        return $this->morphOne(Midia::class, 'model');
    }
}
