<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Band;
use Illuminate\Support\Facades\DB;

class BandSeeder extends Seeder
{
    public function run()
    {
        DB::table('bands')->insert([
            'name' => 'Pink Floyd',
            'user_id' => 2,
            'description' => 'Pink Floyd fue una banda de rock británica, fundada en Londres en 1965. Es considerada un icono cultural del siglo xx y una de las bandas más influyentes y aclamadas en la historia de la música',
            'latitude' => '20.0000000',
            'longitude' => '20.0000000',
        ]);
    }
}
