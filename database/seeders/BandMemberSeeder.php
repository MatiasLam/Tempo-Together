<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BandMember;
use Illuminate\Support\Facades\DB;

class BandMemberSeeder extends Seeder
{
    public function run()
    {
        //crea miembros de banda con id de banda del 1 al 10 y con id de instrumento del 1 al 24
        $bandMembers = [
            ['band_id' => 1, 'name' => 'David Gilmour', 'instrument' => 'Guitar'],
            ['band_id' => 2, 'name' => 'Freddie Mercury', 'instrument' => 'Vocals'],
            ['band_id' => 3, 'name' => 'John Lennon', 'instrument' => 'Guitar'],
            ['band_id' => 4, 'name' => 'Mick Jagger', 'instrument' => 'Vocals'],
            ['band_id' => 5, 'name' => 'Robert Plant', 'instrument' => 'Vocals'],
            ['band_id' => 6, 'name' => 'Jim Morrison', 'instrument' => 'Vocals'],
            ['band_id' => 7, 'name' => 'Angus Young', 'instrument' => 'Guitar'],
            ['band_id' => 8, 'name' => 'Roger Daltrey', 'instrument' => 'Vocals'],
            ['band_id' => 9, 'name' => 'Joey Ramone', 'instrument' => 'Vocals'],
            ['band_id' => 10, 'name' => 'Joe Strummer', 'instrument' => 'Vocals'],
            ['band_id' => 1, 'name' => 'Roger Waters', 'instrument' => 'Bass'],
            ['band_id' => 2, 'name' => 'Brian May', 'instrument' => 'Guitar'],
            ['band_id' => 3, 'name' => 'Paul McCartney', 'instrument' => 'Bass'],
            ['band_id' => 4, 'name' => 'Keith Richards', 'instrument' => 'Guitar'],
            ['band_id' => 5, 'name' => 'Jimmy Page', 'instrument' => 'Guitar'],
            ['band_id' => 6, 'name' => 'Ray Manzarek', 'instrument' => 'Keyboard'],
            ['band_id' => 7, 'name' => 'Malcolm Young', 'instrument' => 'Guitar'],
            ['band_id' => 8, 'name' => 'Pete Townshend', 'instrument' => 'Guitar'],
            ['band_id' => 9, 'name' => 'Johnny Ramone', 'instrument' => 'Guitar'],
            ['band_id' => 10, 'name' => 'Mick Jones', 'instrument' => 'Guitar'],
            ['band_id' => 1, 'name' => 'Nick Mason', 'instrument' => 'Drums'],
            ['band_id' => 2, 'name' => 'Roger Taylor', 'instrument' => 'Drums'],
            ['band_id' => 3, 'name' => 'Ringo Starr', 'instrument' => 'Drums'],
            ['band_id' => 4, 'name' => 'Charlie Watts', 'instrument' => 'Drums'],
            ['band_id' => 5, 'name' => 'John Bonham', 'instrument' => 'Drums'],
            ['band_id' => 6, 'name' => 'John Densmore', 'instrument' => 'Drums'],
            ['band_id' => 7, 'name' => 'Phil Rudd', 'instrument' => 'Drums'],
            ['band_id' => 8, 'name' => 'Keith Moon', 'instrument' => 'Drums'],
            ['band_id' => 9, 'name' => 'Tommy Ramone', 'instrument' => 'Drums'],
            ['band_id' => 10, 'name' => 'Topper Headon', 'instrument' => 'Drums']
        ];

        DB::table('band_members')->insert($bandMembers);
        }
}
