<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HotelMedia>
 */
class HotelMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hotel_id' => \App\Models\Hotel::factory(),
            'media_type' => $this->faker->randomElement(['image', 'video']),
            'media_url' => $this->faker->url(),
            'media_name' => $this->faker->sentence(),
            'media_description' => $this->faker->paragraph(),
        ];
    }
}
