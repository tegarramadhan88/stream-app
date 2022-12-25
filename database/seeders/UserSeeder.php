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
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@bwa.com',
            'password' => Hash::make('admin'),
            'phone_number' => '1234567890',
            'avatar' => '',
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
