<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserInstrument;

class UserInstrumentSeeder extends Seeder
{
    public function run()
    {
        UserInstrument::factory()->count(10)->create();
    }
}
