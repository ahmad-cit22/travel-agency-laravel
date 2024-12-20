<?php

namespace Database\Seeders;

use Database\Factories\PackageBookingFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PackageBookingFactory::new()->count(10)->create();
    }
}
