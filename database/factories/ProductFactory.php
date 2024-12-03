<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_category_id' => $this->faker->numberBetween(1, 5),
            'title' => $this->faker->sentence(6),
            'slug' => $this->faker->unique()->slug(),
            'barcode' => $this->faker->optional()->ean8,
            'image' => $this->faker->optional()->imageUrl(),
            'size_chart' => $this->faker->optional()->imageUrl(),
            'short_description' => $this->faker->paragraph(),
            'long_description' => $this->faker->paragraphs(3, true),
            'is_sale' => $this->faker->boolean(),
            'is_featured' => $this->faker->boolean(),
            'is_active' => $this->faker->boolean(),
            'price' => $this->faker->randomNumber(1, 1000),
            'discount_amount' => $this->faker->optional()->randomNumber(1, 100),
            'meta_title' => $this->faker->optional()->sentence(6),
            'meta_image' => $this->faker->optional()->imageUrl(),
            'meta_description' => $this->faker->optional()->paragraph(),
        ];
    }
}
