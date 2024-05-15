<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInstrumentsTable extends Migration
{
    public function up()
    {
        Schema::create('user_instruments', function (Blueprint $table) {
            $table->id();
            $table->char('user_id', 12)->index();
            $table->string('instrument', 20);
            $table->char('instrument_level', 14)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_instruments');
    }
}
