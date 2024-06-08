<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserInstrument;
use Illuminate\Support\Facades\DB;
class UserInstrumentSeeder extends Seeder
{
    public function run()
    {
        $userInstruments = [
            ['user_id' => 2, 'instrument_id' => 1, 'instrument_level' => 1],
            ['user_id' => 1, 'instrument_id' => 2, 'instrument_level' => 2],
            ['user_id' => 2, 'instrument_id' => 3, 'instrument_level' => 3],
            ['user_id' => 2, 'instrument_id' => 4, 'instrument_level' => 4],
            ['user_id' => 3, 'instrument_id' => 5, 'instrument_level' => 1]
        ];

        DB::table('user_instruments')->insert($userInstruments);


    }
}
