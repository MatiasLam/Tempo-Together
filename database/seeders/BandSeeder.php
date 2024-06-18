<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Band;
use Illuminate\Support\Facades\DB;

class BandSeeder extends Seeder
{
    public function run()
    {
        //crea bandas cerca de estas cordenadas 36.72016, -4.42034 y con nombres e id que coincidan con los conciertos
        $bands = [
            ['name' => 'Pink Floyd', 'user_id' => 1, 'description' => 'Pink Floyd fue una banda de rock británica, fundada en Londres en 1965. Es considerada un icono cultural del siglo xx y una de las bandas más influyentes y aclamadas en la historia de la música', 'latitude' => 36.72016, 'longitude' => -4.42034],
            ['name' => 'Queen', 'user_id' => 3, 'description' => 'Queen es una banda británica de rock formada en 1970 en Londres por el cantante Freddie Mercury, el guitarrista Brian May, el baterista Roger Taylor y el bajista John Deacon. Si bien el grupo ha presentado bajas de sus miembros, May y Taylor son los dos miembros originales que aún permanecen en la banda.', 'latitude' => 36.72016, 'longitude' => -4.42034],
            ['name' => 'The Beatles', 'user_id' => 4, 'description' => 'The Beatles fue una banda de pop/rock inglesa activa durante la década de 1960, y reconocida como la más exitosa comercialmente y críticamente aclamada en la historia de la música popular.', 'latitude' => 36.72016, 'longitude' => -4.42034],
            ['name' => 'The Rolling Stones', 'user_id' => 5, 'description' => 'The Rolling Stones es una banda británica de rock originaria de Londres. La banda se fundó en abril de 1962 por Brian Jones, Mick Jagger, Keith Richards, Bill Wyman, Ian Stewart y Charlie Watts.', 'latitude' => 36.72016, 'longitude' => -4.42034],
            ['name' => 'Led Zeppelin', 'user_id' => 6, 'description' => 'Led Zeppelin fue un grupo británico de rock, considerado uno de los mejores grupos musicales de la historia. Fundado en 1968 por el guitarrista Jimmy Page, quien había pertenecido a The Yardbirds, con el vocalista Robert Plant, el bajista y teclista John Paul Jones y el batería John Bonham.', 'latitude' => 36.72016, 'longitude' => -4.42034],
            ['name' => 'AC/DC', 'user_id' => 7, 'description' => 'AC/DC es un grupo de hard rock formado en Sídney (Australia) en 1973 por los hermanos escoceses Malcolm y Angus Young. Su primer concierto se llevó a cabo la noche de fin de año de 1973, coincidiendo con el lanzamiento de su sencillo Can I Sit Next to' , 'latitude' => 36.72016, 'longitude' => -4.42034],
            ['name' => 'The Who', 'user_id' => 8, 'description' => 'The Who es una banda británica de rock formada en 1964 por Roger Daltrey, Pete Townshend, John Entwistle y Keith Moon. Fue una de las bandas más importantes e influyentes de la década de 1960 y 1970, con más de 100 millones de discos vendidos.', 'latitude' => 36.72016, 'longitude' => -4.42034],
            ['name' => 'The Ramones', 'user_id' => 9, 'description' => 'The Ramones fue una banda de punk rock estadounidense, formada en el barrio de Forest Hills, en el distrito de Queens, Nueva York, en 1974. Considerada como la primera banda de punk rock, y a menudo citada como el grupo que definió el estilo.', 'latitude' => 36.72016, 'longitude' => -4.42034],
            ['name' => 'The Clash', 'user_id' => 10, 'description' => 'The Clash fue una banda británica de punk rock y rock alternativo que se formó en 1976 como parte de la escena original de punk rock británico. Junto con bandas ' , 'latitude' => 36.72016, 'longitude' => -4.42034]
        ];
        DB::table('bands')->insert($bands);
    }
}
