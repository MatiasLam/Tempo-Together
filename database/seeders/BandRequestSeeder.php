<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BandRequest;

class BandRequestSeeder extends Seeder
{
    public function run()
    {
        BandRequest::factory()->count(10)->create();
    }
}
