<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // DB::table('users')::insert(
        //     [
        //     'name'=>'Akhila',
        //     'password'=>'ethan'
        //     ] );    }
        Role::create([
            'user_id' => 1,
            'role' => 'admin'
        ]);
    }
}
