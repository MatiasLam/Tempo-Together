<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('band_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('band_id');
            $table->string('title', 50);
            $table->string('new_member_instrument', 120);
            $table->char('instrument_level', 20)->nullable();
            $table->text('description',100)->nullable();
            $table->timestamps();

            $table->foreign('band_id')->references('band_id')->on('bands')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('band_requests');
    }
}
