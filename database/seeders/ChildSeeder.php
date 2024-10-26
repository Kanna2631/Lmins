<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('children')->insert([
            'name' => 'Test User Child',
            'birthday' => '2020-01-01',
            'gender' => 'Test gender',
            
     ]);
    }
}
