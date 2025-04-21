<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mata_kuliah')->insert([
            ['nama' => 'Pemrograman Web', 'sks' => 3],
            ['nama' => 'Basis Data', 'sks' => 4],
        ]);
        
    }
}
