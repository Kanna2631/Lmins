<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
        public function run(): void
        {
                $this->call(UserSeeder::class);
                $this->call(ChildSeeder::class);
                $this->call(ReservationSeeder::class);
                $this->call(ClinicSeeder::class);
                $this->call(VaccineSeeder::class);
                $this->call(Child_reservationSeeder::class);
                $this->call(Reservation_vaccineSeeder::class);
                
                


        }
}