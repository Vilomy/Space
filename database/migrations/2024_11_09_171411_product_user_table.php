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
        Schema::create('product_user', function (Blueprint $table) {
            $table->foreignId('user_id')->index()->nullable()->constrained('users');
            $table->foreignId('product_id')->index()->nullable()->constrained('products');
            $table->integer('qty');
            $table->foreignId('order_id')->index()->nullable()->constrained('orders');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_user');
    }
};
