<?php

namespace Database\Factories;

use App\Models\{Speaker, Talk};
use Illuminate\Database\Eloquent\Factories\Factory;

class TalkFactory extends Factory
{
    protected $model = Talk::class;

    public function definition(): array
    {
        return [
            'title'      => $this->faker->sentence(4),
            'abstract'   => $this->faker->word(),
            'speaker_id' => Speaker::factory(),
        ];
    }
}
