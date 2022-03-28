<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'ci' => $this->faker->randomElement(['8898989', '4564564', '45645654', '1456456', '4564545']),
            'nacionalidad' => $this->faker->randomElement(['BOL', 'BRA', 'COL', 'PER']),
            'telefono' => $this->faker->phoneNumber()
        ];
    }
}
