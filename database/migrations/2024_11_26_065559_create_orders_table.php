<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('order_no')->unique();
            $table->decimal('price', 8, 2);
            $table->decimal('discount', 8, 2)->nullable();
            $table->decimal('grand_total', 8, 2);
            $table->string('status')->default('pending')->comment('pending, confirmed, cancelled, completed, refunded');
            $table->boolean('is_final')->default(false);
            $table->text('shipping_address')->nullable();
            $table->decimal('delivery_charge', 8, 2)->nullable();
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
        Schema::dropIfExists('orders');
    }
};
