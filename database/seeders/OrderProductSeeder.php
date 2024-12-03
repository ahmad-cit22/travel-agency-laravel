<?php

namespace Database\Seeders;

use Database\Factories\OrderProductFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderProductFactory::new()->count(10)->create();
    }
}
