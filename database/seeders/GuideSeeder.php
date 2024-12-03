<?php

namespace Database\Seeders;

use Database\Factories\GuideFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GuideFactory::new()->count(10)->create();
    }
}
