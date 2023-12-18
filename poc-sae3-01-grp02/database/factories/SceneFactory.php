<?php

namespace Database\Factories;

use App\Models\Scene;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SceneFactory extends Factory
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
            'lien_calcul_scene' => $this->faker->url(),
            'lien_vignette_image' => $this->faker->url(),
            'lien_calcul_image' => $this->faker->url(),
            'user_id' => $this->faker->randomElement(\DB::table('users')->select('id')->get())->id,
        ];
    }
}
