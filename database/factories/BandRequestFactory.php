<?php

namespace Database\Factories;

use App\Models\BandRequest;
use App\Models\Band;
use Illuminate\Database\Eloquent\Factories\Factory;

class BandRequestFactory extends Factory
{
    protected $model = BandRequest::class;

    public function definition()
    {
        return [
            'band_id' => function () {
                return Band::factory()->create()->band_id;
            },
            'new_member_instrument' => $this->faker->word,
            'instrument_level' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'description' => $this->faker->paragraph,
        ];
    }
}
