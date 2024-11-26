<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_location_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('location_link');
            $table->text('short_description');
            $table->longText('long_description');
            $table->string('status')->default('pending')->comment('pending, active, inactive');
            $table->boolean('is_featured')->default(false);
            $table->text('meta_title')->nullable();
            $table->string('meta_image')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
