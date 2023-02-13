<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Customer::create([
            'first_name'=>'Milos',
            'last_name'=>'Petrovic',
            'birthdate'=>'02.12.2000',
            'car_id'=>1
        ]);

        Customer::create([
            'first_name'=>'Marko',
            'last_name'=>'Markovic',
            'birthdate'=>'12.02.2002',
            'car_id'=>2
        ]);

        Customer::create([
            'first_name'=>'Sofija',
            'last_name'=>'Nedovic',
            'birthdate'=>'31.07.2000',
            'car_id'=>3
        ]);

        Customer::create([
            'first_name'=>'Dejan',
            'last_name'=>'Grebovic',
            'birthdate'=>'10.08.1998',
            'car_id'=>4
        ]);

        //Customer::factory(2)->create();
    }
}
