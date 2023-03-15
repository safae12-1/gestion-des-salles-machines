<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class salleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->randomDigit(),
            'libelle' => $this->faker->word(),
        ];
    }
}
