<?php

namespace Database\Factories;

use App\Models\{Conference, Local};
use Illuminate\Database\Eloquent\Factories\Factory;

class ConferenceFactory extends Factory
{
    protected $model = Conference::class;

    public function definition(): array
    {
        return [
            'name'        => $this->faker->name(),
            'description' => $this->faker->text(),
            'start_date'  => $this->faker->dateTime(),
            'end_date'    => $this->faker->dateTime(),
            'status'      => $this->faker->word(),
            'region'      => $this->faker->word(),
            'local_id'    => Local::factory(),
        ];
    }
}
