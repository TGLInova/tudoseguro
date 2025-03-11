<?php

namespace Database\Factories;

use App\Models\ColaboradorGrupo;
use App\Models\GrupoColaborador;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Colaborador>
 */
class ColaboradorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake('pt_BR')->firstName('male'),
            'sobrenome' => fake('pt_BR')->lastName('male'),
            'colaborador_grupo_id' => fn () => ColaboradorGrupo::inRandomOrder()->value('id'),
            'cargo'     => $this->faker->randomElement([
                'Consultor',
                'Corretor',
                'Seo'
            ])
        ];
    }
}
