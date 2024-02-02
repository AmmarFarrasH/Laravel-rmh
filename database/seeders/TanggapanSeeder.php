<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TanggapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $petugasID = DB::table('petugases')->insertGetId([
            'id_petugas' => 01,
            'nama_pengguna' => 'Arif Salahuddin',
            'username' => 'arif',
            'password' => substr(md5(Str::random(32)), 0, 32),
            'telp' => '0895224365651',
            'level' => 'admin',
        ]);

        $pengaduanID = DB::table('pengaduans')->insertGetId([
            'id_pengaduan' => 01,
            'tgl_pengaduan' => now(),
            'nik' => '3218981747490001',
            'isi_laporan' => 'Laporan Pencurian',
            'foto' => 'foto11',
            'status' => 'proses',
        ]);

        DB::table('tanggapans')->insert([
            'id_tanggapan' => random_int(1, 20),
            'id_pengaduan' => $pengaduanID,
            'tgl_tanggapan' => now(),
            'tanggapan' => Str::random(255),
            'id_petugas' => $petugasID,
        ]);
    }
}
