<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create(); // Use Faker for generating random data

        // Create 5 user records
        for ($i = 0; $i < 5; $i++) {
            DB::table('users')->insert([
                'user_type' => $faker->randomElement(['admin', 'user']),
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'), // Hashing a simple password
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
