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
        Schema::create('concert_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('concert_id');
            $table->string('image_path');

            $table->foreign('concert_id')->references('concert_id')->on('concerts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concerts_images');
    }
};
