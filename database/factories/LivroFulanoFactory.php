<?php

namespace Database\Factories;

use App\Models\LivroFulano;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LivroFulano>
 */
class LivroFulanoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'autor'  => $this->faker->name,
            'isbn'   => $this->faker->ean13()
        ];
    }
}
