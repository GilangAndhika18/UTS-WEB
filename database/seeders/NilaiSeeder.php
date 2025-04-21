<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nilai')->insert([
            ['mahasiswa_id' => 1, 'mata_kuliah_id' => 1, 'nilai' => 85],
            ['mahasiswa_id' => 1, 'mata_kuliah_id' => 2, 'nilai' => 90],
            ['mahasiswa_id' => 2, 'mata_kuliah_id' => 1, 'nilai' => 88],
        ]);
        
    }
}
