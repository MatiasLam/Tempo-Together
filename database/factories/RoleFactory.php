<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    protected $model = Role::class;

    public function definition()
    {
        return [
            'user_id' => function () {
                return App\User::factory()->create()->user_id;
            },
            'role' => $this->faker->randomElement(['role1', 'role2', 'role3']), // Adjust based on your roles
        ];
    }
}
