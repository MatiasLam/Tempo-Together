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
            ['id' => '1', 'band_id' => '1','title' => 'Se busca bajista','description'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_instrument' => 'bajo'],
            ['id' => '2', 'band_id' => '2','title' => 'Se busca baterista','description'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_instrument' => 'bateria'],
            ['id' => '3', 'band_id' => '3','title' => 'Se busca guitarrista','description'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_instrument' => 'guitarra'],
            ['id' => '4', 'band_id' => '4','title' => 'Se busca vocalista','description'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_instrument' => 'vocalista'],
            ['id' => '5', 'band_id' => '5','title' => 'Se busca pianista','description'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_instrument' => 'piano'],
            ['id' => '6', 'band_id' => '6','title' => 'Se busca violinista','description'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_instrument' => 'violin'],
            ['id' => '7', 'band_id' => '7','title' => 'Se busca flautista','description'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_instrument' => 'flauta'],
            ['id' => '8', 'band_id' => '8','title' => 'Se busca saxofonista','description'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_instrument' => 'saxofon'],
            ['id' => '9', 'band_id' => '9','title' => 'Se busca trompetista','description'=>'se busca nuevo integrante dispuesta a reunirse todos los sabados','new_member_instrument' => 'trompeta'],
        ];
        DB::table('band_requests')->insert($requests);
    }
}