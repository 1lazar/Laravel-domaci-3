<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Lazar',
            'email' => 'lazar@lazar.rs',
            'password' => bcrypt('bane'),
        ]);

        User::create([
            'name' => 'Luka',
            'email' => 'luka@luka.rs',
            'password' => bcrypt('luka'),
        ]);

        User::create([
            'name' => 'Dejan',
            'email' => 'dejan@dejan.rs',
            'password' => bcrypt('anja'),
        ]);
        $this->call([
            CarSeeder::class,
            CustomerSeeder::class,
            ReservationSeeder::class
        ]);
    }
}
