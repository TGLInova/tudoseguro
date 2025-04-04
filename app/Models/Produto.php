<?php

namespace App\Models;

use App\Models\Concerns\HasScopeAtivo;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class Produto extends Model
{
    use HasScopeAtivo;

    protected $fillable = ['nome', 'descricao', 'icone', 'metadados', 'ativo', 'ordem', 'destaque'];

    protected $casts = ['ativo' => 'bool', 'metadados' => 'collection'];

    public function url(): Attribute
    {
        return Attribute::make(get: fn () => route('produto.show', ['produto' => $this->id, 'slug' => Str::slug($this->nome)], false))->shouldCache();
    }

    public function urlCanonica(): Attribute
    {
        return Attribute::make(get: fn () => route('produto.show', ['produto' => $this->id, 'slug' => Str::slug($this->nome)]))->shouldCache();
    }

    public function imagem(): MorphOne
    {
        return $this->morphOne(Midia::class, 'model');
    }

    public function produtoCategorias(): BelongsToMany
    {
        return $this->belongsToMany(ProdutoCategoria::class, 'produtos_produto_categorias');
    }

    public function scopeWeb($query)
    {
        return $query->oldest('ordem')->ativo(true);
    }
}
