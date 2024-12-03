<?php

namespace Database\Seeders;

use Database\Factories\ProductCategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategoryFactory::new()->count(10)->create();
    }
}
