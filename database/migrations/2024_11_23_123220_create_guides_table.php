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
        Schema::create('guides', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('guide_no')->unique();
            $table->text('bio');
            $table->string('qualifications');
            $table->longText('long_description');
            $table->integer('total_tours')->default(0);
            $table->float('comission_rate')->default(0.00);
            $table->string('status')->default('pending')->comment('pending, approved, rejected, blocked');
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guides');
    }
};
