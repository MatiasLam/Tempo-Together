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
            $table->foreignId('user_id');
            $table->string('name', 20);
            $table->text('description');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bands');
    }
}
