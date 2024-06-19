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
            // $table->string('title',30);
            //el titulo debe tener entre 5 y 30 caracteres
            $table->string('title',30 )->nullable(false);
            $table->date('date');
            $table->time('time');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('place',50)->nullable(false);
            $table->text('desc' ,100)->nullable(false);
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
