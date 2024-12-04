<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Hotel;
use App\Models\Package;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // UserSeeder::class,
            // ProductCategorySeeder::class,
            // ProductSeeder::class,
            // BlogCategorySeeder::class,
            // BlogSeeder::class,
            // HotelLocationSeeder::class,
            // HotelSeeder::class,
            // HotelRoomSeeder::class,
            // OrderSeeder::class,
            // PackageCategorySeeder::class,
            // GuideSeeder::class,
            // PackageSeeder::class,
            // PackageBookingSeeder::class,
            // OrderProductSeeder::class,
            // PackageReviewSeeder::class,
            // ProductStockSeeder::class,
            // PaymentSeeder::class,
            // HotelMediaSeeder::class,
            // HotelFacilitySeeder::class,
            // PackageItinerarySeeder::class,
        ]);
    }
}
