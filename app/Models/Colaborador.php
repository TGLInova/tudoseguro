<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'sobrenome', 'cargo', 'sexo', 'grupo_colaborador_id'];

    protected $table = 'colaboradores';

    public function imagem()
    {
        return $this->morphOne(Midia::class, 'model');
    }
}
