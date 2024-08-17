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
        Schema::table('other_histories', function (Blueprint $table) {
            $table->foreignId('veterinarian_id')->nullable()->constrained('veterinarians')->onDelete('cascade');
            // $table->renameColumn('veterianarian_id', 'veterinarian_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('other_histories', function (Blueprint $table) {});
    }
};
