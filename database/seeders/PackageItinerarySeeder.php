<?php

namespace Database\Seeders;

use App\Models\PackageItinerary;
use Database\Factories\PackageItineraryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageItinerarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PackageItineraryFactory::new()->count(10)->create();
    }
}
