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
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('doctor');
            $table->foreignId('doctor_id')->index()->nullable()->constrained('doctors');
            $table->decimal('price_with_disc')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('price_with_disc')->nullable()->change();
            $table->dropColumn('doctor_id');
            $table->string('doctor')->nullable();
        });
    }
};
