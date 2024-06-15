<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin1234',
            'name' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@gmail.com',
            //haz que password_hash sea la contraseña encriptada de 'admin'
            'password_hash' => bcrypt('admin1234'),
            'telephone' => '123456789',
            'type' => 'admin',
            'age' => '20',
            'latitude' => '20.0000000',
            'longitude' => '20.0000000',
        ],
        [
            'username' => 'user1234',
            'name' => 'user',
            'lastname' => 'user',
            'email' => 'user@gmail.com',
            //haz que password_hash sea la contraseña encriptada de 'user'
            'password_hash' => bcrypt('12341234'),
            'telephone' => '123456789',
            'type' => 'user',
            'icon' => 'https://placehold.co/600x400',
            'age' => '20',
            'latitude' => '20.0000000',
            'longitude' => '20.0000000'
        ]);
    }
}

