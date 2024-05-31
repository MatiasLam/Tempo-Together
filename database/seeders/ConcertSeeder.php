<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Concert;
use Illuminate\Support\Facades\DB;

class ConcertSeeder extends Seeder
{
    public function run()
    {
        DB::table('concerts')->insert([
            'band_id' => 1,
            'title' => 'Concert 1',
            'date' => '2024-05-14',
            'time' => '19:00:00',
            'latitude' => '20.0000',
            'longitude' => '20.0000',
            'place' => 'New York',
            'desc' => 'Concert 1 description',
            'poster' => 'concert1.jpg'
        ]);
    }
}
