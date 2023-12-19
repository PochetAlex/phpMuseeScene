<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FavorisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'scene_id' => $this->faker->randomElement(\DB::table('scenes')->select('id')->get())->id,
            'user_id' => $this->faker->randomElement(\DB::table('users')->select('id')->get())->id,
        ];
    }
}
