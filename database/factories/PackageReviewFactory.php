<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PackageReview>
 */
class PackageReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'package_id' => \App\Models\Package::factory(),
            'user_id' => \App\Models\User::factory(),
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'review' => $this->faker->optional()->paragraph(),
        ];
    }
}
