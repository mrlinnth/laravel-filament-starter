<?php

namespace Database\Factories;

use App\Enums\SpeciesEnum;
use App\Enums\TraitsEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
 */
class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'history' => fake()->paragraph(),
            'species' => fake()->randomElement(SpeciesEnum::toArray()),
            'gender' => fake()->randomElement(['male','female','other']),
            'age' => fake()->numberBetween(1, 1000),
            'eye_color' => fake()->safeHexColor(),
            'traits' => fake()->randomElements(TraitsEnum::toArray(), 3)
        ];
    }
}
