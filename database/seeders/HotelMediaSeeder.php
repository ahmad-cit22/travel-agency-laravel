<?php

namespace Database\Seeders;

use Database\Factories\HotelMediaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HotelMediaFactory::new()->count(10)->create();
    }
}
