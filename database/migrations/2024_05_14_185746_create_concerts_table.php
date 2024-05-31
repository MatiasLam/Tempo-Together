<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcertsTable extends Migration
{
    public function up()
    {
        Schema::create('concerts', function (Blueprint $table) {
            $table->id("concert_id")->autoIncrement();
            $table->foreignId('band_id')->onDelete('cascade');
            $table->string('title',50);
            $table->date('date');
            $table->time('time');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('place');
            $table->text('desc');
            $table->string('poster')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('concerts');
    }
}
