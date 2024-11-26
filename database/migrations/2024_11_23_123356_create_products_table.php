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
            $table->double('is_sale')->default(0);
            $table->string('code')->nullable();
            $table->string('barcode')->nullable();
            $table->string('unit')->nullable();
            $table->string('image')->nullable();
            $table->string('size_chart')->nullable();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->integer('is_featured')->default(0);
            $table->integer('is_trending')->default(0);
            $table->integer('is_offer')->default(0);
            $table->integer('is_hot_deal')->default(0);
            $table->integer('priority_no_1')->nullable();
            $table->integer('priority_no_2')->nullable();
            $table->integer('priority_no_3')->nullable();
            $table->integer('is_active')->default(1);
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
