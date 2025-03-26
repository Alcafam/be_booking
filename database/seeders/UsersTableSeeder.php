<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 2 Admins
        DB::table('users')->insert([
            [
                'user_type' => 'admin',
                'first_name' => 'Alice',
                'last_name' => 'Johnson',
                'email' => 'alice.johnson@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_type' => 'admin',
                'first_name' => 'Bob',
                'last_name' => 'Smith',
                'email' => 'bob.smith@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Create 5 Users
        DB::table('users')->insert([
            [
                'user_type' => 'user',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_type' => 'user',
                'first_name' => 'Sarah',
                'last_name' => 'Miller',
                'email' => 'sarah.miller@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_type' => 'user',
                'first_name' => 'James',
                'last_name' => 'Williams',
                'email' => 'james.williams@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_type' => 'user',
                'first_name' => 'Olivia',
                'last_name' => 'Taylor',
                'email' => 'olivia.taylor@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_type' => 'user',
                'first_name' => 'Michael',
                'last_name' => 'Brown',
                'email' => 'michael.brown@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
