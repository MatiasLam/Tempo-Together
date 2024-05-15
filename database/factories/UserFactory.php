<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'user_id' => $this->faker->unique()->regexify('[A-Za-z0-9]{12}'),
            'username' => $this->faker->unique()->regexify('[A-Za-z0-9]{12}'),
            'password_hash' => bcrypt('password'), // You may adjust this as needed
            'type' => $this->faker->randomElement(['admin', 'user']), // Or whatever types you have
            'icon' => $this->faker->imageUrl(), // Or adjust to your icon generation logic
            'age' => $this->faker->numberBetween(18, 99),
            'location' => $this->faker->city,
            'number' => $this->faker->numerify('#########'),
        ];
    }
}
