<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    protected $model = Car::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => "Audi",
            'model'=> rand(1,8),
            'year_of_car' => rand(2000,2023),
            'price_of_car' => rand(7000,50000)
        ];
    }
}
