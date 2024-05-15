<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcertsTable extends Migration
{
    public function up()
    {
        Schema::create('concerts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('band_id')->constrained()->onDelete('cascade');
            $table->date('date')->nullable();
            $table->string('location', 40)->nullable();
            $table->text('note')->nullable();
            $table->text('poster')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('concerts');
    }
}
