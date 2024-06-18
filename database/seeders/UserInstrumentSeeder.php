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
            ['user_id' => 1, 'instrument_id' => 1, 'instrument_level' => 1],
            ['user_id' => 1, 'instrument_id' => 2, 'instrument_level' => 2],
            ['user_id' => 1, 'instrument_id' => 3, 'instrument_level' => 3],
            ['user_id' => 1, 'instrument_id' => 4, 'instrument_level' => 4],

            ['user_id' => 2, 'instrument_id' => 1, 'instrument_level' => 1],
            ['user_id' => 2, 'instrument_id' => 2, 'instrument_level' => 2],
            ['user_id' => 2, 'instrument_id' => 3, 'instrument_level' => 3],
            ['user_id' => 2, 'instrument_id' => 4, 'instrument_level' => 4],

            ['user_id' => 3, 'instrument_id' => 4, 'instrument_level' => 1],
            ['user_id' => 3, 'instrument_id' => 1, 'instrument_level' => 5],
            ['user_id' => 3, 'instrument_id' => 5, 'instrument_level' => 1],
            ['user_id' => 3, 'instrument_id' => 8, 'instrument_level' => 2],

            ['user_id' => 4, 'instrument_id' => 5, 'instrument_level' => 5],
            ['user_id' => 4, 'instrument_id' => 7, 'instrument_level' => 3],

            ['user_id' => 5, 'instrument_id' => 4, 'instrument_level' => 5],
            ['user_id' => 5, 'instrument_id' => 7, 'instrument_level' => 4],

            ['user_id' => 6, 'instrument_id' => 4, 'instrument_level' => 5],
            ['user_id' => 6, 'instrument_id' => 3, 'instrument_level' => 1],

            ['user_id' => 7, 'instrument_id' => 4, 'instrument_level' => 1],
            ['user_id' => 7, 'instrument_id' => 3, 'instrument_level' => 1],

            ['user_id' => 8, 'instrument_id' => 4, 'instrument_level' => 2],
            ['user_id' => 8, 'instrument_id' => 3, 'instrument_level' => 3],

            ['user_id' => 9, 'instrument_id' => 4, 'instrument_level' => 5],
            ['user_id' => 9, 'instrument_id' => 3, 'instrument_level' => 5],

            ['user_id' => 10, 'instrument_id' => 4, 'instrument_level' => 3],
            ['user_id' => 10, 'instrument_id' => 3, 'instrument_level' => 5],






        ];

        DB::table('user_instruments')->insert($userInstruments);


    }
}
