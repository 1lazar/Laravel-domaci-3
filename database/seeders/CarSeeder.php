<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'brand'=>"Audi",
            'model'=>"A6",
            'year_of_car'=>2015,
            'price_of_car'=>25000
        ]);
        Car::create([
            'brand'=>"Reno",
            'model'=>"Clio",
            'year_of_car'=>2005,
            'price_of_car'=>2000
        ]);
        Car::create([
            'brand'=>"Fiat",
            'model'=>"Uno",
            'year_of_car'=>1997,
            'price_of_car'=>500
        ]);
        Car::create([
            'brand'=>"Ford",
            'model'=>"Mondeo",
            'year_of_car'=>2005,
            'price_of_car'=>4000
        ]);


        //Car::factory(2)->create();
    }
}
