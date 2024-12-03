<?php

namespace Database\Seeders;

use Database\Factories\HotelFacilityFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HotelFacilityFactory::new()->count(10)->create();
    }
}
