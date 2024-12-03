<?php

namespace Database\Seeders;

use Database\Factories\ProductStockFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductStockFactory::new()->count(10)->create();
    }
}
