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
            $table->foreignId('user_id');
            $table->foreignId('instrument_id');
            $table->integer('instrument_level');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_instruments');
    }

    
}
