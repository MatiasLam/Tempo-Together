<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandsTable extends Migration
{
    public function up()
    {
        Schema::create('bands', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->text('description')->nullable();
            $table->char('members_count', 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bands');
    }
}
