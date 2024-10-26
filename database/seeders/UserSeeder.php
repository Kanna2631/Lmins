<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
               'name' => 'Test User',
               'email' => 'test@example.com',
               'birthday' => '2000-01-01',
               'phone_number' => '000-0000-0000',
               'password' => Hash::make('testtest'),
               
        ]);
    }
}