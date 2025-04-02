<?php

namespace App\Observers;

use App\Models\CartaoBeneficio;

class CartaoBeneficioObserver
{
    /**
     * Handle the CartaoBeneficio "created" event.
     */
    public function creating(CartaoBeneficio $cartaoBeneficio): void
    {

        $cartao = null;

        do {

            $numero = sprintf("%016d", random_int(0, (10**16)-1));

            // Se já possuir o número, tenta gerar outro

            $cartao = CartaoBeneficio::firstWhere('numero', $numero);

        } while ($cartao);

        $cartaoBeneficio->forceFill(['numero' => $numero]);
    }

    /**
     * Handle the CartaoBeneficio "updated" event.
     */
    public function updated(CartaoBeneficio $cartaoBeneficio): void
    {
        //
    }

    /**
     * Handle the CartaoBeneficio "deleted" event.
     */
    public function deleted(CartaoBeneficio $cartaoBeneficio): void
    {
        //
    }

    /**
     * Handle the CartaoBeneficio "restored" event.
     */
    public function restored(CartaoBeneficio $cartaoBeneficio): void
    {
        //
    }

    /**
     * Handle the CartaoBeneficio "force deleted" event.
     */
    public function forceDeleted(CartaoBeneficio $cartaoBeneficio): void
    {
        //
    }
}
