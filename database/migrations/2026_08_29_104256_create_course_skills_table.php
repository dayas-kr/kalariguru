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
        Schema::create('course_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->cascadeOnDelete();
            $table->foreignId('skill_id')->constrained()->cascadeOnDelete();
            $table->unsignedInteger('order')->default(0);
            $table->unsignedTinyInteger('type')->default(0); // cast to enum in model
            $table->timestamps();

            $table->unique(['course_id', 'skill_id']);
            $table->index('skill_id'); // composite unique only helps course_id-first lookups
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_skills');
    }
};
