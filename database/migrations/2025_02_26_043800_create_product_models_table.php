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
        Schema::create('product_models', function (Blueprint $table) {
            $table->id('product_id');  // Primary key with custom name 'item_id'
            $table->string('itemname');  // Name of the menu item
            $table->longText('detail');  // Details about the menu item, nullable
            $table->decimal('price', 8, 2);  // Price of the item, with 8 digits in total and 2 decimal places
            $table->decimal('stock_quantity', 10, 0);  // stock quantity of the item, with 8 digits in total
            $table->string('sku');  // sku of the item
            $table->decimal('discounted_price', 8, 2)->nullable(); // For discounted price
            $table->longText('description')->nullable();
            $table->text('ingredients');
            $table->text('warnings');
            $table->string('size');
            $table->string('fragrance');
            $table->string('skintype');
            $table->string('hairtype');
            $table->string('formulation');
            $table->string('is_featured')->default('no');
            $table->string('is_new_arrival')->default('no');
            $table->string('is_best_seller')->default('no');
            $table->string('is_limited_edition')->default('no');
            $table->longText('benefits');
            $table->longText('how_to_use');

            $table->string('category_id');
            $table->string('subcategory_id');
            $table->string('picture');  // Path to the item picture, nullable
            $table->string('picture1');  // Path to the item picture, nullable
            $table->string('picture2');  // Path to the item picture, nullable
            $table->string('picture3');  // Path to the item picture, nullable
            $table->string('color');  // Path to the item picture, nullable
            $table->softDeletes();
            $table->timestamps();  // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_models');
    }
};
