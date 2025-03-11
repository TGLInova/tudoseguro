<?php

namespace App\Models;

use App\Models\Concerns\HasScopeAtivo;
use Illuminate\Database\Eloquent\Model;

class Parceiro extends Model
{
    use HasScopeAtivo;

    protected $fillable = ['nome', 'ordem'];

    public function imagem()
    {
        return $this->morphOne(Midia::class, 'model');
    }

    public function scopeWeb($query)
    {
        return $query->oldest('ordem')->ativo(true);
    }
}
