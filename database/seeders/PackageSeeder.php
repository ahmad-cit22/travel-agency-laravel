<?php

namespace Database\Seeders;

use App\Models\Package;
use Database\Factories\PackageFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PackageFactory::new()->count(10)->create();
    }
}
