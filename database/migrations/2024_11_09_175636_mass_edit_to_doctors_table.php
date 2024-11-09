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
        Schema::table('doctors', function (Blueprint $table) {
            $table->renameColumn('last_name', 'second_name');
            $table->renameColumn('middle_name', 'third_name');
            $table->string('work_period')->nullable();
            $table->dropColumn('phone');
            $table->dropColumn('email');
            $table->dropColumn('room');
            $table->dropColumn('experience');
        });
        Schema::table('doctors', function (Blueprint $table) {
            $table->integer('experience')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropColumn('experience');
        });

        Schema::table('doctors', function (Blueprint $table) {
            $table->string('experience')->nullable();
            $table->integer('room')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->dropColumn('work_period');
            $table->renameColumn('third_name', 'middle_name');
            $table->renameColumn('second_name', 'last_name');

        });
    }
};
