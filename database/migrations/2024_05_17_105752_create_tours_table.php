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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('place')->nullable();
            $table->integer('days')->nullable();
            $table->integer('nights')->nullable();
            $table->longText('discription')->nullable();
            $table->integer('badget_from')->nullable();
            $table->string('photo')->nullable();
            $table->foreignId('region_id')->constrained('regions')->cascadeOnDelete()->nullable();
            $table->foreignId('activity_type_id')->constrained('activity_types')->cascadeOnDelete()->nullable();
            $table->foreignId('landscape_id')->constrained('landscapes')->cascadeOnDelete()->nullable();
            $table->foreignId('activity_level_id')->constrained('activity_levels')->cascadeOnDelete()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
