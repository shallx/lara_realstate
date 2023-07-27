<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => HASH::make('123456'),
            'phone' => '01686561274',
            'address' => 'Ambarkhana',
            'role' => 'admin',
            'status' => 'active',

        ]);
        DB::table('users')->insert([
            'name' => 'Agent',
            'username' => 'agent',
            'email' => 'agent@gmail.com',
            'password' => HASH::make('123456'),
            'role' => 'agent',
            'status' => 'active',

        ]);
    }
}
