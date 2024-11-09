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
        Schema::table('profiles', function (Blueprint $table) {
            $table->renameColumn('last_name', 'second_name');
            $table->renameColumn('middle_name', 'third_name');
            $table->string('medical_card',)->nullable();
            $table->dropColumn('login');
            $table->foreignId('user_id')->index()->nullable()->constrained('users');
            $table->dropColumn('address');
            $table->dropColumn('specialization');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->string('specialization')->nullable();
            $table->string('address')->nullable();
            $table->dropColumn('user_id');
            $table->string('login')->nullable();
            $table->dropColumn('medical_card');
            $table->renameColumn('third_name', 'middle_name');
            $table->renameColumn('second_name', 'last_name');
        });
    }
};
