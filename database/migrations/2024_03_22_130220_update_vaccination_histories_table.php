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
        Schema::table('vaccination_histories', function (Blueprint $table) {
            $table->boolean('is_settelled')->default(false);
        });

        Schema::table('other_histories', function (Blueprint $table) {
            $table->boolean('is_settelled')->default(false);
        });

        Schema::table('grooming_histories', function (Blueprint $table) {
            $table->boolean('is_settelled')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vaccination_histories', function (Blueprint $table) {
            $table->dropColumn(['is_settelled']);
        });

        Schema::table('other_histories', function (Blueprint $table) {
            $table->dropColumn(['is_settelled']);
        });

        Schema::table('grooming_histories', function (Blueprint $table) {
            $table->dropColumn(['is_settelled']);
        });
    }
};
