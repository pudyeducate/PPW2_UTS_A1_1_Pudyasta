<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PemainSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) { 
            DB::table('pemains')->insert([
                'nama_pemain' => $faker->text(50),
                'nomor_punggung' => $faker->numberBetween(1, 99),
                'posisi' => $faker->randomElement(['GK','CB','RB','LB','CM','DM','LW','RW','CF']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
