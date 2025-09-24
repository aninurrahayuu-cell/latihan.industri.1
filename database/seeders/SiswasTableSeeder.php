<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table("siswas")->insert([
            [
               'nama_lengkap' => 'Ani',
               'jenis_kelamin' => 'Perempuan',
               'tanggal_lahir' => '2008-6-18',
               'kelas' => '11 rpl 1',
            ],
           [
               'nama_lengkap' => 'Anggi',
               'jenis_kelamin' => 'Perempuan',
               'tanggal_lahir' => '2008-7-19',
               'kelas' => '11 rpl 1',
            ],
            [
               'nama_lengkap' => 'Riska',
               'jenis_kelamin' => 'Perempuan',
               'tanggal_lahir' => '2008-8-20',
               'kelas' => '11 rpl 1',
            ],
            [
               'nama_lengkap' => 'Salwa',
               'jenis_kelamin' => 'Perempuan',
               'tanggal_lahir' => '2008-9-21',
               'kelas' => '11 rpl 1',
            ],
            [
               'nama_lengkap' => 'Dila',
               'jenis_kelamin' => 'Perempuan',
               'tanggal_lahir' => '2008-10-22',
               'kelas' => '11 rpl 1',
            ],
            [
               'nama_lengkap' => 'Zaskia',
               'jenis_kelamin' => 'Perempuan',
               'tanggal_lahir' => '2008-10-23',
               'kelas' => '11 rpl 1',
            ],
        ]);
    }
}
