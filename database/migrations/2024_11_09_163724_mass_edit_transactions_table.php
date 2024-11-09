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
        Schema::table('transactions', function (Blueprint $table) {
            $table->string('currency')->nullable();
            $table->dropColumn('user');
            $table->smallInteger('type')->nullable();
            $table->string('payment_system')->nullable();
            $table->renameColumn('value', 'amount');
            $table->foreignId('user_id')->index()->nullable()->constrained('users');
            $table->foreignId('order_id')->index()->nullable()->constrained('orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropColumn('order_id');
            $table->dropColumn('user_id');
            $table->renameColumn('amount', 'value');
            $table->dropColumn('payment_system');
            $table->dropColumn('type');
            $table->string('user')->nullable();
            $table->dropColumn('currency');
        });
    }
};
