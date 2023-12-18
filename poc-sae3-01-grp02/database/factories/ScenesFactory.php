<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ScenesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_scene' => fake()->name(),
            'nom_grp' => fake()->name(),
            'description' => fake()->text(),
            'texte_scene' => fake()->text(),
            'lien_calcul_scene' => $this->faker->url('http'),
            'lien_vignette_image' => $this->faker->url('http'),
            'lien_calcul_image' => $this->faker->url('http'),
            'date_debut' => $this->faker->dateTimeThisCentury($max = '2013-01-01')->format('Y-m-d'),
        ];
    }
}
