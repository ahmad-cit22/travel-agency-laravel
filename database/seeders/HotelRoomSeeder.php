<?php

namespace Database\Seeders;

use App\Models\HotelRoom;
use Database\Factories\HotelRoomFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HotelRoomFactory::new()->count(10)->create();
    }
}
