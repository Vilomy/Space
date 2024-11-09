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
            $table->integer('vendor_code')->unique()->nullable();
            $table->double('duration')->nullable();
            $table->text('contraindication')->nullable();
            $table->text('readings')->nullable();
            $table->dropColumn('doctor_id');
            $table->dropColumn('price_with_disc');
            $table->dropColumn('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('category')->nullable();
            $table->decimal('price_with_disc')->nullable();
            $table->foreignId('doctor_id')->index()->nullable()->constrained('doctors');
            $table->dropColumn('readings');
            $table->dropColumn('contraindication');
            $table->dropColumn('duration');
            $table->dropColumn('vendor_code');
        });
    }
};
