<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandMembersTable extends Migration
{
    public function up()
    {
        Schema::create('band_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('band_id')->constrained()->onDelete('cascade');
            $table->char('user_id', 12)->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('band_members');
    }
}
