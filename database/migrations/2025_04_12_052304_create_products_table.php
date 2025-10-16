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
            $table->string('cj_pid')->unique();
            $table->foreignId('category_id')->constrained();
            $table->string('name_en');
            $table->string('name_zh')->nullable();
            $table->text('description_en');
            $table->text('description_zh')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('stock')->default(0);
            $table->json('images');
            $table->json('videos')->nullable();
            $table->decimal('weight', 8, 2);
            $table->string('package_size');
            $table->boolean('is_hot')->default(false);
            $table->timestamp('cj_synced_at')->nullable();
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
