<?php

namespace Database\Factories;

use App\Models\Local;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocalFactory extends Factory
{
    protected $model = Local::class;

    public function definition(): array
    {
        return [
            'name'        => $this->faker->name(),
            'city'        => $this->faker->city(),
            'country'     => $this->faker->country(),
            'postal_code' => $this->faker->postcode(),
        ];
    }
}
