<?php

namespace Database\Seeders;

use App\Models\PackageCategory;
use Database\Factories\PackageCategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PackageCategoryFactory::new()->count(10)->create();
    }
}
