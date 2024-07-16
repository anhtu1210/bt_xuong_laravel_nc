<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(1, 10),
            'rating' => $this->faker->numberBetween(1, 5),
            'rateable_id' => $this->faker->numberBetween(1, 10),
            'rateable_type' => $this->faker->randomElement(['App\Models\Article', 'App\Models\Video', 'App\Models\Image']),
        ];
    }
}
