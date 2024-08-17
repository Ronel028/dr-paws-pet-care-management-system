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
        Schema::create("veterinarians", function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('license_no')->nullable();
            $table->timestamps();
        });

        Schema::create('vaccination_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pet_id')->constrained('pets')->onDelete('cascade');
            $table->date('vaccination_date');
            $table->string('weight')->nullable();
            $table->string('temperature')->nullable();
            $table->string('against')->nullable();
            $table->string('manufacturer_lot')->nullable();
            $table->foreignId('veterinarian_id')->nullable()->constrained('veterinarians')->onDelete('cascade');
            $table->date('next_schedule')->nullable();
            $table->timestamps();
        });

        Schema::create('other_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pet_id')->constrained('pets')->onDelete('cascade');
            $table->date('date_administered');
            $table->string('weight')->nullable();
            $table->string('description');
            // $table->foreignId('veterianarian_id')->nullable()->constrained('veterinarians')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_vaccination_histories_table');
        Schema::dropIfExists('veterinarians');
    }
};
