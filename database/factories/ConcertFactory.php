<?php

namespace Database\Factories;

use App\Models\Concert;
use App\Models\Band;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConcertFactory extends Factory
{
    protected $model = Concert::class;

    public function definition()
    {
        return [
            'band_id' => function () {
                return Band::factory()->create()->band_id;
            },
            'date' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'location' => $this->faker->city,
            'note' => $this->faker->paragraph,
            'poster' => $this->faker->imageUrl(), // Or adjust based on your poster generation logic
        ];
    }
}
