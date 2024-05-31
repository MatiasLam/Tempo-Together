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
            BandSeeder::class,
            BandRequestSeeder::class,
            InstrumentSeeder::class,
            ConcertSeeder::class,
            UserInstrumentSeeder::class
        ]);

    }
}
