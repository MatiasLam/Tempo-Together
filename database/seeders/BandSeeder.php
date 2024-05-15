<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Band;

class BandSeeder extends Seeder
{
    public function run()
    {
        Band::factory()->count(10)->create();
    }
}
