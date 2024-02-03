<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $nik = DB::table('masyarakats')->insertGetId([
            'nik' => '3218981747490001',
            'nama' => 'Arif Salahuddin',
            'username' => 'arifsl',
            'password' => substr(md5('arifsl'), 0, 32),
            'telp' => '0895224365651',
        ]);

        DB::table('pengaduans')->insert([
            'id_pengaduan' => random_int(1, 20),
            'tgl_pengaduan' => now(),
            'nik' => '3218981747490001',
            'isi_laporan' => Str::random(255),
            'foto' => Str::random(255),
            'status' => '0',
        ]);
    }
}
