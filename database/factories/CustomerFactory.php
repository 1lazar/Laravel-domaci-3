<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'birthdate' => fake()->date("d-m-Y"),
            'car_id' => 1
        ];
    }
}
