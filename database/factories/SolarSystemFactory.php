<?php

namespace Database\Factories;

use App\Models\Galaxy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SolarSystem>
 */
class SolarSystemFactory extends Factory
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
            'description' => $this->faker->text,
            'image' => $this->faker->imageUrl,
            'galaxy_id' => Galaxy::all()->random()->id
        ];
    }
}
