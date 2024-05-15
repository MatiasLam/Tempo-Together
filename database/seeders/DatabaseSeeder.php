<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Llamar a los seeders creados anteriormente
        $this->call([
            UserSeeder::class,

            RoleSeeder::class,

            BandSeeder::class,
            ConcertSeeder::class,
            BandMemberSeeder::class,
            BandRequestSeeder::class,
            UserInstrumentSeeder::class,
        ]);

    }
}
