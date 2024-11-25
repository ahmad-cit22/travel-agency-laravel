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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('package_id')->constrained()->onDelete('cascade');
            $table->foreignId('guide_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('booking_no')->unique();
            $table->date('booking_date');
            $table->integer('total_adults');
            $table->integer('total_children')->default(0);
            $table->decimal('total_price', 8, 2);
            $table->decimal('discount', 8, 2)->nullable();
            $table->string('status')->default('pending')->comment('pending, confirmed, cancelled, completed, refunded');
            $table->string('payment_method');
            $table->decimal('paid_amount', 8, 2)->default(0);
            $table->string('txn_id')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
