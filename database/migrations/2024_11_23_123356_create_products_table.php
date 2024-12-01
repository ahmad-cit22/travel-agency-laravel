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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_category_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->string('barcode')->nullable();
            $table->string('image')->nullable();
            $table->string('size_chart')->nullable();
            $table->text('short_description');
            $table->longText('long_description');
            $table->boolean('is_sale')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->decimal('price', 8, 2);
            $table->decimal('discount_amount', 8, 2)->nullable();
            $table->integer('quantity')->default(0);
            $table->integer('sold_quantity')->default(0);
            $table->string('meta_title')->nullable();
            $table->string('meta_image')->nullable();
            $table->string('meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
