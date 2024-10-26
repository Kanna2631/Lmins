<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clinics')->insert([
            'name' => 'Test Clinic',
            'address' => 'Testadress',
            'is_possible_covid_vaccine' => true,
            'is_possible_influenza_vaccine' => true,
        ]);
    }
}
