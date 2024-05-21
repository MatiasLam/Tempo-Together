<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandsTable extends Migration
{
    public function up()
    {
        Schema::create('bands', function (Blueprint $table) {
            $table->id('band_id')->autoIncrement();
            $table->string('name', 20);
            $table->text('description');
            $table->text('location')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bands');
    }
}
