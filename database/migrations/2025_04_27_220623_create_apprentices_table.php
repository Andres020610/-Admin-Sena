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
        Schema::create('apprentices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cell_number')->nullable();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('computer_id')->nullable();
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('computer_id')->references('id')->on('computers')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apprentices');
    }
};
