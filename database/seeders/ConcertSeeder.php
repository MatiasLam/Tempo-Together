<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Concert;

class ConcertSeeder extends Seeder
{
    public function run()
    {
        Concert::factory()->count(10)->create();
    }
}
