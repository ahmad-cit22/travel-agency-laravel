<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HotelLocation>
 */
class HotelLocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'image' => $this->faker->optional()->imageUrl(),
            'description' => $this->faker->optional()->paragraph(),
            'slug' => $this->faker->unique()->slug(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'is_featured' => $this->faker->boolean(),
            'meta_title' => $this->faker->optional()->sentence(),
            'meta_image' => $this->faker->optional()->imageUrl(),
            'meta_description' => $this->faker->optional()->sentence(),
        ];
    }
}
