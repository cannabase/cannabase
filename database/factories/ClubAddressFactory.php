<?php

namespace Database\Factories;

use App\Models\ClubAddress;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ClubAddressFactory extends Factory
{
    protected $model = ClubAddress::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'official_name' => $this->faker->name(),
            'street' => $this->faker->streetName(),
            'housenumber' => $this->faker->word(),
            'city' => $this->faker->city(),
            'zip' => $this->faker->postcode(),
        ];
    }
}
