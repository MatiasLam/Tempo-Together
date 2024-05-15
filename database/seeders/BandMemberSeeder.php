<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BandMember;

class BandMemberSeeder extends Seeder
{
    public function run()
    {
        BandMember::factory()->count(10)->create();
    }
}
