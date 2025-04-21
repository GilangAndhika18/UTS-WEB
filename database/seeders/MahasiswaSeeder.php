<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            ['nama' => 'Budi', 'nim' => '123456', 'jurusan' => 'Informatika'],
            ['nama' => 'Sari', 'nim' => '654321', 'jurusan' => 'Sistem Informasi'],
        ]);
        
    }
}
