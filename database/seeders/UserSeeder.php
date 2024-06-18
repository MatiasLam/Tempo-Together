<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {

        $users=  [
            [
                'username' => 'admin1234',
                'name' => 'admin',
                'lastname' => 'admin',
                'email' => 'admin@gmail.com',
                'password_hash' => bcrypt('admin1234'),
                'telephone' => '223456789',
                'type' => 'band',
                'age' => '20',
                'latitude' => '20.0000000',
                'longitude' => '20.0000000'
            ],
            [
                'username' => 'user1',
                'name' => 'user',
                'lastname' => 'user',
                'email' => 'user@gmail.com',
                'password_hash' => bcrypt('12341234'),
                'telephone' => '323456789',
                'type' => 'musician',
                'age' => '20',
                'latitude' => '20.0000000',
                'longitude' => '20.0000000'
            ],
            [
                'username' => 'user2',
                'name' => 'user',
                'lastname' => 'user',
                'email' => 'user2@gmail.com',
                'password_hash' => bcrypt('12341234'),
                'telephone' => '423456789',
                'type' => 'band',
                'age' => '20',
                'latitude' => '20.0000000',
                'longitude' => '20.0000000'
            ],
            [
                'username' => 'user3',
                'name' => 'user',
                'lastname' => 'user',
                'email' => 'user3@gmail.com',
                'password_hash' => bcrypt('12341234'),
                'telephone' => '523456789',
                'type' => 'band',
                'age' => '20',
                'latitude' => '20.0000000',
                'longitude' => '20.0000000'
            ],
            [
                'username' => 'user4',
                'name' => 'user',
                'lastname' => 'user',
                'email' => 'user4@gmail.com',
                'password_hash' => bcrypt('12341234'),
                'telephone' => '623456789',
                'type' => 'band',
                'age' => '20',
                'latitude' => '20.0000000',
                'longitude' => '20.0000000'
            ],
            [
                'username' => 'user5',
                'name' => 'user',
                'lastname' => 'user',
                'email' => 'user5@gmail.com',
                'password_hash' => bcrypt('12341234'),
                'telephone' => '723456789',
                'type' => 'band',
                'age' => '20',
                'latitude' => '20.0000000',
                'longitude' => '20.0000000'
            ],
            [
                'username' => 'user6',
                'name' => 'user',
                'lastname' => 'user',
                'email' => 'user6@gmail.com',
                'password_hash' => bcrypt('12341234'),
                'telephone' => '823456789',
                'type' => 'band',
                'age' => '20',
                'latitude' => '20.0000000',
                'longitude' => '20.0000000'
            ],
            [
                'username' => 'user7',
                'name' => 'user',
                'lastname' => 'user',
                'email' => 'user7@gmail.com',
                'password_hash' => bcrypt('12341234'),
                'telephone' => '923456789',
                'type' => 'band',
                'age' => '20', 
                'latitude' => '20.0000000',
                'longitude' => '20.0000000' 
            ],
            [
                'username' => 'user8',
                'name' => 'user',
                'lastname' => 'user',
                'email' => 'user8@gmail.com',
                'password_hash' => bcrypt('12341234'),
                'telephone' => '923456789',
                'type' => 'band',
                'age' => '20',
                'latitude' => '20.0000000',
                'longitude' => '20.0000000'
            ],
            [
                'username' => 'user9',
                'name' => 'user',
                'lastname' => 'user',
                'email' => 'user9@gmail.com',
                'password_hash' => bcrypt('12341234'),
                'telephone' => '923456789',
                'type' => 'band',
                'age' => '20',
                'latitude' => '20.0000000',
                'longitude' => '20.0000000'
            ],
            [
                'username' => 'user10',
                'name' => 'user',
                'lastname' => 'user',
                'email' => 'user10@gmail.com',
                'password_hash' => bcrypt('12341234'),
                'telephone' => '103456789',
                'type' => 'band',
                'age' => '20',
                'latitude' => '20.0000000',
                'longitude' => '20.0000000'
            ]
        ];

        DB::table('users')->insert($users);
    

    }
}
