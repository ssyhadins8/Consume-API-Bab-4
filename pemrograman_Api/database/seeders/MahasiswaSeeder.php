<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        // 1 data diri
        DB::table('mahasiswa')->insert([
            'nim' => '24091397145',
            'nama' => 'Selvi Adinda',
            'jenis_kelamin' => 'P',
            'alamat' => 'JL Ketintang Wiyata V',
            'tanggal_lahir' => '2005-06-28',
            'program_studi' => 'Manajemen Informatika',
            'angkatan' => '2024',
            'email' => '24091397145@mhs.unesa.ac.id',
            'status' => 'Aktif',
            'agama' => 'Islam',
            'hobi' => 'Nonton Film',
            'created_at' => Carbon::now()
        ]);

        // 20 data dummy (FAKER)
        for ($i = 0; $i < 20; $i++) {
            DB::table('mahasiswa')->insert([
                'nim' => rand(100000000, 999999999),
                'nama' => fake()->name(),
                'jenis_kelamin' => rand(0,1) ? 'L' : 'P',
                'alamat' => fake()->address(),
                'tanggal_lahir' => fake()->date(),
                'program_studi' => 'Manajemen Informatika',
                'angkatan' => rand(2018, 2024),
                'email' => fake()->unique()->safeEmail(),
                'status' => 'Aktif',
                'agama' => 'Islam',
                'hobi' => fake()->word(),
                'created_at' => Carbon::now()
            ]);
        }
    }
}