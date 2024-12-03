<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guide>
 */
class GuideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'guide_no' => $this->faker->unique()->regexify('[A-Z0-9]{3}-[A-Z0-9]{3}-[A-Z0-9]{3}'),
            'bio' => $this->faker->paragraphs(3, true),
            'qualifications' => $this->faker->sentence(6),
            'long_description' => $this->faker->paragraphs(5, true),
            'total_tours' => $this->faker->numberBetween(0, 100),
            'comission_rate' => $this->faker->randomFloat(1, 2, 2),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected', 'blocked']),
            'meta_title' => $this->faker->optional()->regexify('[A-Za-z0-9\s]{3,60}'),
            'meta_description' => $this->faker->optional()->regexify('[A-Za-z0-9\s]{3,160}'),
        ];
    }
}
