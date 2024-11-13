<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reservations')->insert([
            'clinic_id'=>'1',
            'child_id'=>'1',
            'date' => '2024-01-01',
            'consultion_reason'=>'一般診療(発熱あり)',
            'is_cancelled'=>true,
        ]);
    }
}
