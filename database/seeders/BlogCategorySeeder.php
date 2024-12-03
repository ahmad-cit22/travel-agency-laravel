<?php

namespace Database\Seeders;

use Database\Factories\BlogCategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogCategoryFactory::new()->count(10)->create();
    }
}
