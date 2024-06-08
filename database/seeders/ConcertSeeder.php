<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Concert;
use Illuminate\Support\Facades\DB;

class ConcertSeeder extends Seeder
{
    public function run()
    {
        //crea conciertos cerca de estas cordenadas 36.72016, -4.42034 y con id de banda del 1 al 10
        $concerts = [
            ['band_id' => 1,'title' => 'Pink Floyd en málaga', 'date' => '2021-12-12', 'time' => '20:00', 'latitude' => 36.72016, 'longitude' => -4.42034, 'desc' => 'Concierto de Pink Floyd en Málaga', 'place' => 'Sala malaga','poster' => '/storage/concerts/exapleConcert.jpg'],
            ['band_id' => 2,'title' => 'Queen en málaga', 'date' => '2021-12-12', 'time' => '20:00', 'latitude' => 36.72016, 'longitude' => -4.42034, 'desc' => 'Concierto de Queen en Málaga', 'place' => 'Sala malaga','poster' => '/storage/concerts/exapleConcert.jpg'],
            ['band_id' => 3,'title' => 'The Beatles en málaga', 'date' => '2021-12-12', 'time' => '20:00', 'latitude' => 36.72016, 'longitude' => -4.42034, 'desc' => 'Concierto de The Beatles en Málaga', 'place' => 'Sala malaga','poster' => '/storage/concerts/exapleConcert.jpg'],
            ['band_id' => 4,'title' => 'The Rolling Stones en málaga', 'date' => '2021-12-12', 'time' => '20:00', 'latitude' => 36.72016, 'longitude' => -4.42034, 'desc' => 'Concierto de The Rolling Stones en Málaga', 'place' => 'Sala malaga','poster' => '/storage/concerts/exapleConcert.jpg'],
            ['band_id' => 5,'title' => 'Led Zeppelin en málaga', 'date' => '2021-12-12', 'time' => '20:00', 'latitude' => 36.72016, 'longitude' => -4.42034, 'desc' => 'Concierto de Led Zeppelin en Málaga', 'place' => 'Sala malaga','poster' => '/storage/concerts/exapleConcert.jpg'],
            ['band_id' => 6,'title' => 'The Doors en málaga', 'date' => '2021-12-12', 'time' => '20:00', 'latitude' => 36.72016, 'longitude' => -4.42034, 'desc' => 'Concierto de The Doors en Málaga', 'place' => 'Sala malaga','poster' => '/storage/concerts/exapleConcert.jpg'],
            ['band_id' => 7,'title' => 'AC/DC en málaga', 'date' => '2021-12-12', 'time' => '20:00', 'latitude' => 36.72016, 'longitude' => -4.42034, 'desc' => 'Concierto de AC/DC en Málaga', 'place' => 'Sala malaga','poster' => '/storage/concerts/exapleConcert.jpg'],
            ['band_id' => 8,'title' => 'The Who en málaga', 'date' => '2021-12-12', 'time' => '20:00', 'latitude' => 36.72016, 'longitude' => -4.42034, 'desc' => 'Concierto de The Who en Málaga', 'place' => 'Sala malaga','poster' => '/storage/concerts/exapleConcert.jpg'],
            ['band_id' => 9,'title' => 'The Ramones en málaga', 'date' => '2021-12-12', 'time' => '20:00', 'latitude' => 36.72016, 'longitude' => -4.42034, 'desc' => 'Concierto de The Ramones en Málaga', 'place' => 'Sala malaga','poster' => '/storage/concerts/exapleConcert.jpg'],
            ['band_id' => 10,'title' => 'The Clash en málaga', 'date' => '2021-12-12', 'time' => '20:00', 'latitude' => 36.72016, 'longitude' => -4.42034, 'desc' => 'Concierto de The Clash en Málaga', 'place' => 'Sala malaga','poster' => '/storage/concerts/exapleConcert.jpg']
            
        ];
          
        DB::table('concerts')->insert($concerts);
    }
}
