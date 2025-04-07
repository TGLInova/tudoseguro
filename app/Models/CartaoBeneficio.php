<?php

namespace App\Models;

use App\Observers\CartaoBeneficioObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

// #[ObservedBy(CartaoBeneficioObserver::class)]
class CartaoBeneficio extends Model
{
    protected $fillable = ['nome', 'cpf', 'celular'];
}
