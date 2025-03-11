<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Midia>
 */
class MidiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'caminho' => fn () => $this->avatar(['g' => 'male', 'id' => random_int(0, 15)]),
            'nome'    => 'Wallace.webp'
        ];
    }

    protected function avatar(array $attributes = [])
    {
        $resp = Http::get('https://xsgames.co/randomusers/avatar.php?' . http_build_query($attributes));

        $path = 'midias/temp/' . Str::random(5) . '.jpg';

        Storage::disk('public')->put($path, $resp->body());

        return $path;
    }

    public function cover()
    {
        $resp = Http::get('https://picsum.photos/1600/900');

        $path = 'midias/temp/post_' . Str::random(5) . '.jpg';

        Storage::disk('public')->put($path, $resp->body());

        return $path;
    }
}
