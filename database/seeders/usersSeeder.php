<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 20 ; $i++) { 
            
            DB::table('users')->insert([
                'nama' => $faker->name(),
                'email' => $faker->unique()->safeEmail,
                'password' => $faker->password(),
                'jalan' => $faker->streetAddress(),
                'kota' => $faker->city(),
                'role' => $faker->randomElement(['admin', 'user']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
