<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HotelRoom>
 */
class HotelRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hotel_id' => $this->faker->numberBetween(1, 10),
            'room_no' => $this->faker->unique()->numerify('###'),
            'room_type' => $this->faker->randomElement(['Single', 'Double', 'Suite']),
            'capacity' => $this->faker->numberBetween(1, 5),
            'price' => $this->faker->randomFloat(2, 50, 500),
            'facilities' => $this->faker->words(3, true),
            'total_rooms' => $this->faker->numberBetween(1, 100),
            'booked_rooms' => $this->faker->numberBetween(0, 100),
        ];
    }
}
