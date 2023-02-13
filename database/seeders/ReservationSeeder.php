<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::create([
            'time_from' => '10.12.2022',
            'time_to' => '15.12.2022',
            'car_id' => 1
        ]);

        Reservation::create([
            'time_from' => '08.02.2022',
            'time_to' => '15.02.2022',
            'car_id' => 2
        ]);
        Reservation::create([
            'time_from' => '13.10.2022',
            'time_to' => '15.10.2022',
            'car_id' => 2
        ]);
        Reservation::create([
            'time_from' => '01.01.2023',
            'time_to' => '19.01.2023',
            'car_id' => 3
        ]);
        Reservation::create([
            'time_from' => '03.08.2022',
            'time_to' => '20.08.2022',
            'car_id' => 4
        ]);

        //Reservation::factory(2)->create();
    }
}
