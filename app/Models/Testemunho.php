<?php

namespace App\Models;

use App\Models\Concerns\HasScopeAtivo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testemunho extends Model
{
    use HasFactory, HasScopeAtivo;

    protected $table = 'testemunhos';

    protected $fillable = ['nome', 'texto', 'avaliacao', 'ativo', 'ordem'];

    public function imagem()
    {
        return $this->morphOne(Midia::class, 'model');
    }

    public function scopeWeb($query)
    {
        return $query->oldest('ordem')->ativo(true);
    }
}
