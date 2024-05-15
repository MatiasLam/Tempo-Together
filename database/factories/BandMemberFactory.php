<?php

namespace Database\Factories;

use App\Models\BandMember;
use App\Models\Band;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BandMemberFactory extends Factory
{
    protected $model = BandMember::class;

    public function definition()
    {
        return [
            'band_id' => function () {
                return Band::factory()->create()->band_id;
            },
            'user_id' => function () {
                return User::factory()->create()->user_id;
            },
        ];
    }
}
