<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
		    'apellidos' => $this->faker->lastName(),
            'num_pacientes' => $this->faker->numberBetween(0, 20),
        ];
    }
}
