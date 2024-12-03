<?php

namespace Database\Seeders;

use Database\Factories\PackageReviewFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PackageReviewFactory::new()->count(10)->create();
    }
}
