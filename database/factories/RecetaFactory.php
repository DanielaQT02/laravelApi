<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receta>
 */
class RecetaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categoria_id' => \App\Models\Categoria::all()->random()->id,
            'user_id' => \App\Models\User::all()->random()->id,
            'titulo' => fake()->sentence(),
            'descripcion'  => fake()->text(),
            'ingredientes' => fake()->text(),
            'instrucciones' => fake()->text(),
            'imagen' => fake()->imageUrl(600, 400),
        ];
    }
}
