<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 20 ; $i++) { 
            // DB::table('mahasiswa')->insert([
            DB::table('mahasiswa')->insert([
                'nama' => $faker->name(),
                'nim' => $faker->unique()->safeEmail,
                'jurusan' => $faker->randomElement(['Informatika', 'Sistem Informasi', 'Teknik komputer']),
                'umur' => $faker->numberBetween(18, 25),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
