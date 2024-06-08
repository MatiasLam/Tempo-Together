<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Llamar a los seeders creados anteriormente
        $this->call([
            InstrumentSeeder::class,

            UserSeeder::class,
            UserInstrumentSeeder::class,

            BandSeeder::class,

            BandRequestSeeder::class,
            ConcertSeeder::class,
            BandMemberSeeder::class,

        ]);

    }
}
