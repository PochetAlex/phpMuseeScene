<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentairesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => fake()->title(),
            'texte' => fake()->text(),
            'date_debut' => $this->faker->dateTimeThisCentury($max = '2013-01-01')->format('Y-m-d'),
            'date_modification' => now(),
        ];
    }
}
