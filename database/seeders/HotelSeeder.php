<?php

namespace Database\Seeders;

use Database\Factories\HotelFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HotelFactory::new()->count(10)->create();
    }
}
