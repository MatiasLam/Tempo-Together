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
        DB::table('band_requests')->insert([
            [
                'id' => 1,
                'band_id' => 1,
                'title' => 'busco bajista',
                'new_member_instrument' => 'cualquier',
                'instrument_level' => 'bueno',
                'description' => 'se buscan amigos por que me faltas'
            ]
        ]);
    }
}