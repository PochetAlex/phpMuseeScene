<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    private static int $sceneID = 1;
    private static int $userID = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sceneID = self::$sceneID++;
        $userID = self::$userID++;

        return [
            'scene_id' => $sceneID,
            'user_id' => $userID,
            'valeur' => $this->faker->numberBetween(1, 5), // Note entre 1 et 5 (vous pouvez ajuster selon vos besoins)
        ];
    }
}
