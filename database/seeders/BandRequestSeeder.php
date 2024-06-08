<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BandRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crear solicitudes de bandas que correspondan con las bandas creadas en BandSeeder
        $requests = [
            ['id' => '1', 'band_id' => '1','title' => 'Se busca bajista','descripcion'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_isntrument' => 'bajo'],
            ['id' => '2', 'band_id' => '2','title' => 'Se busca baterista','descripcion'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_isntrument' => 'bateria'],
            ['id' => '3', 'band_id' => '3','title' => 'Se busca guitarrista','descripcion'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_isntrument' => 'guitarra'],
            ['id' => '4', 'band_id' => '4','title' => 'Se busca vocalista','descripcion'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_isntrument' => 'vocalista'],
            ['id' => '5', 'band_id' => '5','title' => 'Se busca pianista','descripcion'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_isntrument' => 'piano'],
            ['id' => '6', 'band_id' => '6','title' => 'Se busca violinista','descripcion'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_isntrument' => 'violin'],
            ['id' => '7', 'band_id' => '7','title' => 'Se busca flautista','descripcion'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_isntrument' => 'flauta'],
            ['id' => '8', 'band_id' => '8','title' => 'Se busca saxofonista','descripcion'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_isntrument' => 'saxofon'],
            ['id' => '9', 'band_id' => '9','title' => 'Se busca trompetista','descripcion'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_isntrument' => 'trompeta'],
            ['id' => '10', 'band_id' => '10','title' => 'Se busca violonchelista','descripcion'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_isntrument' => 'violonchelo']
        ];
        DB::table('band_requests')->insert($requests);
    }
}