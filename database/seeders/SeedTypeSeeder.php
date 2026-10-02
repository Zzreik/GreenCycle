<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seed_types')->insert([
            [
                'name' => 'Basica',
                'description' => 'Semilla estandar',
                'cares_per_level' => 5,
                'harvest_reward' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Especial',
                'description' => 'Crece mas rapido',
                'cares_per_level' => 3,
                'harvest_reward' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
