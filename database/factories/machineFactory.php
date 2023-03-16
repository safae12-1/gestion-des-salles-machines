<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\salle;
class machineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $salle = salle::factory()->create();
        return [
            'reference' => $this->faker->word(),
            'marque' => $this->faker->word(),
            'dateAchat' => $this->faker->date(),
            'prix' => $this->faker->randomDigit(),
            'salleid' => $salle->id,
        ];
    }
}