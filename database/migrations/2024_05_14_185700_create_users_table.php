<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->char('user_id', 12)->primary();
            $table->char('username', 12);
            $table->string('password_hash');
            $table->char('type', 7);
            $table->string('icon', 70);
            $table->char('age', 2)->nullable();
            $table->string('location',120)->nullable();
            $table->char('number', 9)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
