<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $g = fn ($maxNbChars) => fake('pt_BR')->realText($maxNbChars);

        return [
            'titulo' => fake('pt_BR')->realText(10),
            'descricao' => fake('pt_BR')->realTextBetween(100, 170),
            'texto' => <<<HTML
                <h2>{$g(10)}</h2>
                <p>{$g(150)}</p>
                <h4>{$g(10)}</h4>
                <p>{$g(100)}</p>
            HTML,
            'data_publicacao' => $this->faker->randomElement([null, $this->faker->date(max: '+3 days')])
        ];
    }
}
