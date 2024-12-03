<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
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
            'guide_id' => \App\Models\Guide::factory(),
            'package_category_id' => \App\Models\PackageCategory::factory(),
            'departure_date' => $this->faker->date(),
            'return_date' => $this->faker->date(),
            'departure_location' => $this->faker->city(),
            'return_location' => $this->faker->city(),
            'price_adult' => $this->faker->numberBetween(1000, 10000),
            'price_child' => $this->faker->numberBetween(1000, 10000),
            'discount' => $this->faker->optional()->numberBetween(100, 1000),
            'short_description' => $this->faker->sentence(),
            'long_description' => $this->faker->paragraph(),
            'total_seats' => $this->faker->numberBetween(1, 100),
            'booked_seats' => $this->faker->numberBetween(0, 100),
            'status' => $this->faker->randomElement(['pending', 'active', 'inactive']),
            'is_featured' => $this->faker->boolean(),
            'meta_title' => $this->faker->optional()->word(),
            'meta_image' => $this->faker->optional()->word(),
            'meta_description' => $this->faker->optional()->sentence(),
        ];
    }
}
