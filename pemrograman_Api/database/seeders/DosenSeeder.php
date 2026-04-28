<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    public function run()
    {
        DB::table('dosen')->insert([
            'nama_dosen' => 'M Adam Islam Mashuri',
            'nidn' => '0016019001',
            'alamat' => 'Jl. Mbah Muchdor Rt 15 Rw 04 Lebo Sidoarjo',
            'program_studi' => 'Manajemen Informatika',
            'email' => 'mmashuri@unesa.ac.id',
            'tanggal_lahir' => '1999-01-16',
            'jenis_kelamin' => 'L',
            'status' => 'Dosen Tetap',
            'bidang_keahlian' => 'Pemrograman API',
            'created_at' => Carbon::now()
        ]);
    }
}