<?php

namespace App\Models\Concerns;

trait HasScopeAtivo
{
    public function scopeAtivo($query, bool $ativo = true)
    {
        return $query->where('ativo', $ativo);
    }
}
