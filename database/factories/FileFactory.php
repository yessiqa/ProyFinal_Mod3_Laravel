<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'path' => $this->faker->randomElement(['sdasdasdasdsdgdf', 'fdgdafgdfag', 'dfgsdafgasdfg', 'fdgasdfz', '4564545']),
        ];
    }    
}
