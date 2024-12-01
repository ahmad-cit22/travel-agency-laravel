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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('package_booking_id')->constrained()->onDelete('cascade')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('type')->comment('order, package-booking');
            $table->string('txn_id');
            $table->string('payment_method');
            $table->decimal('amount', 8, 2);
            $table->string('status')->default('pending')->comment('pending, completed, cancelled, failed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
