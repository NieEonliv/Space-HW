<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galaxy>
 */
class GalaxyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'url' => $this->faker->unique()->word,
            'description' => $this->faker->text,
            'image' => $this->faker->imageUrl
        ];
    }
}
