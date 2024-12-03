<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            'order_no' => $this->faker->unique()->randomNumber(5, false),
            'price' => $this->faker->numberBetween(0,100000),
            'discount' => 0,
            'grand_total' => 0,
            'status' => 'pending',
            'is_final' => false,
            'shipping_address' => null,
            'delivery_charge' => 0,
            'payment_method' => 'cash',
            'paid_amount' => 0,
            'txn_id' => null,
            'note' => null,
        ];
    }
}
