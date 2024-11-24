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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('guide_id')->constrained()->onDelete('cascade');
            $table->date('departure_date');
            $table->date('return_date');
            $table->string('departure_location');
            $table->string('return_location');
            $table->decimal('price_adult', 8, 2);
            $table->decimal('price_child', 8, 2);
            $table->integer('total_seats');
            $table->integer('booked_seats')->default(0);
            $table->string('status')->default('pending')->comment('pending, active, inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
