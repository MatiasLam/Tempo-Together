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
            $table->unsignedBigInteger('band_id');
            $table->string('title',50);
            $table->date('date');
            $table->time('time');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('place');
            $table->text('desc');
            $table->string('poster')->nullable();
            $table->timestamps();

            $table->foreign('band_id')->references('band_id')->on('bands')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('concerts');
    }
}
