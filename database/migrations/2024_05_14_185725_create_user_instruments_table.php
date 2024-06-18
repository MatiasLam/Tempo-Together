<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInstrumentsTable extends Migration
{
    public function up()
    {
        Schema::create('user_instruments', function (Blueprint $table) {
            $table->id('id')->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('instrument_id');
            $table->integer('instrument_level');
            $table->timestamps();

            // Define foreign keys
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('instrument_id')->references('instrument_id')->on('instruments')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_instruments');
    }
}
