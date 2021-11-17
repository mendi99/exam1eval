<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
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
            'dni' => $this->faker->numberBetween(10000000, 99999999).$this->faker->randomLetter(),
            'fecha_nacimiento' => $this->faker->date(),
            'vacunado' => $this->faker->boolean(),
            'doctor_id' => Doctor::all()->random()->id,
        ];
    }
}
