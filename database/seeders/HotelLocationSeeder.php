<?php

namespace Database\Seeders;

use Database\Factories\HotelLocationFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HotelLocationFactory::new()->count(10)->create();
    }
}
