<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testemunho>
 */
class TestemunhoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = fake('pt_BR');

        $gender = $faker->randomElement(['m', 'f']);

        return [
            'nome'  => fn () => $faker->firstName($gender) . ' ' . $faker->lastName($gender),

            'texto' => fn () => $faker->randomElement([
                'Grande é o Senhor e muito digno de louvor; e a sua grandeza, inescrutável. Salmo 145:3',
                'O Senhor te abençoe e te guarde; o Senhor faça resplandecer o seu rosto sobre ti e tenha misericórdia de ti; o Senhor sobre ti levante o seu rosto e te dê a paz.'
            ])
        ];
    }
}
