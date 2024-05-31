<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //campo user_id que es autoincrementado
            $table->id('user_id')->autoIncrement();
            $table->char('username', 12);
            $table->char('name',15);
            $table->char('lastname',15);
            $table->string('email', 70)->unique();
            $table->string('password_hash');
            $table->string('telephone', 9)->nullable();
            $table->char('type', 8);
            $table->string('icon', 120)->default('https://placehold.co/600x400');
            $table->char('age', 2);
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
