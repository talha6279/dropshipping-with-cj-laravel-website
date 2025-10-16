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
        Schema::table('checkout_models', function (Blueprint $table) {
            $table->string('payment_status')->after('product_id')->default('Paypal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('checkout_models', function (Blueprint $table) {
            $table->dropColumn('payment_status');
        });
    }
};
