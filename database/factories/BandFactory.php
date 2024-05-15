<?php

namespace Database\Factories;

use App\Models\Band;
use Illuminate\Database\Eloquent\Factories\Factory;

class BandFactory extends Factory
{
    protected $model = Band::class;

    public function definition()
    {
        return [
            //el name debe de tener un maximo de 12 caracteres
            'name' => $this->faker->unique()->word,
            'description' => $this->faker->sentence,
            'members_count' => $this->faker->numberBetween(1, 10),
        ];
    }
}

