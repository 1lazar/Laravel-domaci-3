<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'time_form' => '01.01.2023',
            'time_to' => '10.01.2023',
            'car_id' => rand(1,3)
        ];
    }
}
