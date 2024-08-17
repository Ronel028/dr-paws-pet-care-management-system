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
        Schema::create('immunization_references', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('drug_references', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('vaccination_histories', function (Blueprint $table) {
            $table->foreignId('immunization_reference_id')->after('temperature')->nullable()->constrained('immunization_references')->onDelete('cascade');
            $table->dropColumn(['against']);
        });

        Schema::table('other_histories', function (Blueprint $table) {
            $table->foreignId('drug_reference_id')->after('weight')->nullable()->constrained('drug_references')->onDelete('cascade');
            $table->dropColumn(['description']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('immunization_references');
    }
};
