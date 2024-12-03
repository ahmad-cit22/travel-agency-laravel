<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hotel_location_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->company(),
            'location_link' => $this->faker->url(),
            'short_description' => $this->faker->paragraph(),
            'long_description' => $this->faker->paragraphs(3, true),
            'status' => $this->faker->randomElement(['pending', 'active', 'inactive']),
            'is_featured' => $this->faker->boolean(),
            'meta_title' => $this->faker->optional()->sentence(),
            'meta_image' => $this->faker->optional()->imageUrl(),
            'meta_description' => $this->faker->optional()->sentence(),
        ];
    }
}
