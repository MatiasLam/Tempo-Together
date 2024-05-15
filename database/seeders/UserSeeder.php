<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        /* este es el modelo     public function definition()
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
} */
        //crea un usuario con el id uno : 
        User::factory()->create([
            'user_id' => 1,
            'username' => 'admin',
            'password_hash' => bcrypt('password'),
            'type' => 'admin',
            'icon' => 'https://randomuser.me/api/port'
        ]);

        User::factory()
            ->count(50)
            ->create();
    }
}

