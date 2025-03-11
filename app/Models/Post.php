<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descricao', 'texto', 'data_publicacao', 'destaque', 'usuario_id', 'post_categoria_id'];

    protected $casts = [
        'destaque' => 'bool',
        'data_publicacao' => 'datetime'
    ];

    public function imagem(): MorphOne
    {
        return $this->morphOne(Midia::class, 'model');
    }

    public function postCategoria(): BelongsTo
    {
        return $this->belongsTo(PostCategoria::class, 'post_categoria_id');
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(Usuario::class);
    }

    public function url(): Attribute
    {
        return Attribute::make(get: fn () => route('post.show', [
            'post' => $this->id,
            'slug' => $this->slug
        ]));
    }

    public function slug(): Attribute
    {
        return Attribute::make(get: fn () => Str::slug($this->titulo));
    }

    public function scopePublicado($query, bool $publicado = true)
    {
        if ($publicado) {
            $query->whereNotNull('data_publicacao')->where('data_publicacao', '<=', now());
            return $query;
        }

        return $query->whereNull('data_publicacao')->orWhere('data_publicacao', '>', now());
    }
}
