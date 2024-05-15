<?php

namespace Database\Factories;

use App\Models\UserInstrument;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserInstrumentFactory extends Factory
{
    protected $model = UserInstrument::class;

    public function definition()
    {
        return [
            'user_id' => function () {
                return User::factory()->create()->user_id;
            },
            'instrument' => $this->faker->word,
            'instrument_level' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
        ];
    }
}
