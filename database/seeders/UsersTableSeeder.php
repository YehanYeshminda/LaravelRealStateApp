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
            //ADMIN
            [
                'name' => "Admin",
                'username' => "admin",
                'email' => "admin@gmail.com",
                'password' => Hash::make('1'),
                'role' => 'admin',
                'status' => 'active',
            ],

            // AGENT
            [
                'name' => "agent",
                'username' => "agent",
                'email' => "agent@gmail.com",
                'password' => Hash::make('1'),
                'role' => 'agent',
                'status' => 'active',
            ],

            // USER
            [
                'name' => "customer",
                'username' => "customer",
                'email' => "user@gmail.com",
                'password' => Hash::make('1'),
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}
