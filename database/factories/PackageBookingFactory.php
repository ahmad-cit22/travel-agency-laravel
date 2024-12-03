<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PackageBooking>
 */
class PackageBookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'package_id' => $this->faker->numberBetween(1, 10),
            'guide_id' => $this->faker->numberBetween(1, 10),
            'user_id' => $this->faker->numberBetween(1, 10),
            'booking_no' => $this->faker->unique()->regexify('[A-Z0-9]{3}-[A-Z0-9]{3}-[A-Z0-9]{3}'),
            'booking_date' => $this->faker->date(),
            'total_adults' => $this->faker->numberBetween(1, 10),
            'total_children' => $this->faker->numberBetween(0, 10),
            'total_price' => $this->faker->randomFloat(1, 2, 2),
            'discount' => $this->faker->optional()->randomFloat(1, 2, 2),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled', 'completed', 'refunded']),
            'payment_method' => $this->faker->randomElement(['cash', 'bank_transfer', 'card']),
            'paid_amount' => $this->faker->randomFloat(1, 2, 2),
            'txn_id' => $this->faker->optional()->regexify('[A-Za-z0-9]{8,12}'),
            'note' => $this->faker->optional()->paragraphs(2, true),
        ];
    }
}
