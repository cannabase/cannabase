<?php

namespace Database\Factories;

use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ClubFactory extends Factory
{
    protected $model = Club::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'name' => $this->faker->name(),
            'mail' => $this->faker->word(),
            'website' => $this->faker->word(),
            'logo' => $this->faker->word(),
            'status' => $this->faker->randomNumber(),
            'plus' => $this->faker->boolean(),
        ];
    }
}
