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
            $table->string('specialization')->nullable()->change();
            $table->string('experience')->nullable()->change();
            $table->renameColumn('room_number', 'room')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('doctors', function (Blueprint $table) {
            $table->renameColumn('room', 'room_number');
            $table->integer('experience')->nullable()->change();
            $table->string('specialization')->nullable()->change();
        });
    }
};
