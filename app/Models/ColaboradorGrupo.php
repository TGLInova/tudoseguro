<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ColaboradorGrupo extends Model
{

    protected $fillable = ['nome'];

    public $timestamps = false;

    public $table = 'colaborador_grupos';


    public function colaboradores(): HasMany
    {
        return $this->hasMany(Colaborador::class, 'colaborador_grupo_id');
    }
}
