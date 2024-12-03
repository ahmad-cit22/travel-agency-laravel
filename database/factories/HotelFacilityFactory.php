<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HotelFacility>
 */
class HotelFacilityFactory extends Factory
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
            'name' => $this->faker->word,
            'icon' => $this->faker->randomElement(['fa-solid fa-bed', 'fa-solid fa-swimmer', 'fa-solid fa-concierge-bell', 'fa-solid fa-wifi', 'fa-solid fa-parking', 'fa-solid fa-utensils']),
            'description' => $this->faker->optional()->paragraph,
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
