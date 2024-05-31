<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserInstrument;
use Illuminate\Support\Facades\DB;
class UserInstrumentSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_instruments')->insert(
            ['user_id' => 1, 'instrument_id' => 1],
            ['user_id' => 1, 'instrument_id' => 2],
            ['user_id' => 2, 'instrument_id' => 3],
            ['user_id' => 2, 'instrument_id' => 4],
            ['user_id' => 3, 'instrument_id' => 5]
     
    );


    }
}
