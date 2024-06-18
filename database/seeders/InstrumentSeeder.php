<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instruments = [
            ['instrument' => 'Vocalista', 'icon' => 'vocalista.png'],
            ['instrument' => 'Guitarra', 'icon' => 'guitarra.png'],
            ['instrument' => 'Bajo', 'icon' => 'bajo.png'],
            ['instrument' => 'Bateria', 'icon' => 'bateria.png'],
            ['instrument' => 'Piano', 'icon' => 'piano.png'],
            ['instrument' => 'Violín', 'icon' => 'violin.png'],
            ['instrument' => 'Flauta', 'icon' => 'flauta.png'],
            ['instrument' => 'Saxofón', 'icon' => 'saxofon.png'],
            ['instrument' => 'Trompeta', 'icon' => 'trompeta.png'],
            ['instrument' => 'Violonchelo', 'icon' => 'violonchelo.png'],
            ['instrument' => 'Clarinete', 'icon' => 'clarinete.png'],
            ['instrument' => 'Arpa', 'icon' => 'arpa.png'],
            ['instrument' => 'Oboe', 'icon' => 'oboe.png'],
            ['instrument' => 'Contrabajo', 'icon' => 'contrabajo.png'],
            ['instrument' => 'Fagot', 'icon' => 'fagot.png'],
            ['instrument' => 'Tuba', 'icon' => 'tuba.png'],
            ['instrument' => 'Mandolina', 'icon' => 'mandolina.png'],
            ['instrument' => 'Ukelele', 'icon' => 'ukelele.png'],
            ['instrument' => 'Trombón', 'icon' => 'trombon.png'],
            ['instrument' => 'Armónica', 'icon' => 'armonica.png'],
            ['instrument' => 'Bandoneón', 'icon' => 'bandoneon.png'],
            ['instrument' => 'Marimba', 'icon' => 'marimba.png'],
            ['instrument' => 'Lira', 'icon' => 'lira.png'],
        ];

        DB::table('instruments')->insert($instruments);
    }
}
