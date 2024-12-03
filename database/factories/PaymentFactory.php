<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => $this->faker->optional()->randomElement(\App\Models\Order::pluck('id')->toArray()),
            'package_booking_id' => $this->faker->optional()->randomElement(\App\Models\PackageBooking::pluck('id')->toArray()),
            'user_id' => \App\Models\User::factory(),
            'type' => $this->faker->randomElement(['order', 'package-booking']),
            'txn_id' => $this->faker->unique()->numerify('txnid-##########'),
            'payment_method' => $this->faker->randomElement(['cash', 'card', 'online']),
            'amount' => $this->faker->randomFloat(1, 10, 2),
            'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled', 'failed']),
        ];
    }
}
