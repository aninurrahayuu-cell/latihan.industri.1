<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodatas')->delete();
        DB::table('biodatas')->insert([
            [
                'nama_lengkap' => 'ani',
                'jenis_kelamin' => 'perempuan',
                'tanggal_lahir' => '2009-9-3',
                'tempat_lahir' =>'bandung',
                'agama' => 'islam',
                'alamat' => 'cibaduyut',
                'telepon' => '08123456789',
                'email' => 'nurahayuani@gmail.com',
            ],
            [
                'nama_lengkap' => 'anggi',
                'jenis_kelamin' => 'perempuan',
                'tanggal_lahir' => '2009-9-4',
                'tempat_lahir' =>'bandung',
                'agama' => 'islam',
                'alamat' => 'cibaduyut',
                'telepon' => '08123456789',
                'email' => 'nurahayuanggi@gmail.com',
            ],
            [
                'nama_lengkap' => 'dila',
                'jenis_kelamin' => 'perempuan',
                'tanggal_lahir' => '2009-9-5',
                'tempat_lahir' =>'bandung',
                'agama' => 'islam',
                'alamat' => 'cibaduyut',
                'telepon' => '08123456789',
                'email' => 'nurahayudila@gmail.com',
            ],
            [
                'nama_lengkap' => 'riska',
                'jenis_kelamin' => 'perempuan',
                'tanggal_lahir' => '2009-9-6',
                'tempat_lahir' =>'bandung',
                'agama' => 'islam',
                'alamat' => 'cibaduyut',
                'telepon' => '08123456789',
                'email' => 'nurahayuriska@gmail.com',
            ],
            [
                'nama_lengkap' => 'salwa',
                'jenis_kelamin' => 'perempuan',
                'tanggal_lahir' => '2009-9-7',
                'tempat_lahir' =>'bandung',
                'agama' => 'islam',
                'alamat' => 'cibaduyut',
                'telepon' => '08123456789',
                'email' => 'nurahayusalwa@gmail.com',
            ],
            [
                'nama_lengkap' => 'zaskia',
                'jenis_kelamin' => 'perempuan',
                'tanggal_lahir' => '2009-9-8',
                'tempat_lahir' =>'bandung',
                'agama' => 'islam',
                'alamat' => 'cibaduyut',
                'telepon' => '08123456789',
                'email' => 'nurahayuzas@gmail.com',
            ],
            [
                'nama_lengkap' => 'rahmania',
                'jenis_kelamin' => 'perempuan',
                'tanggal_lahir' => '2009-9-9',
                'tempat_lahir' =>'bandung',
                'agama' => 'islam',
                'alamat' => 'cibaduyut',
                'telepon' => '08123456789',
                'email' => 'nurahayurah@gmail.com',
            ],
            [
                'nama_lengkap' => 'aulia',
                'jenis_kelamin' => 'perempuan',
                'tanggal_lahir' => '2009-9-10',
                'tempat_lahir' =>'bandung',
                'agama' => 'islam',
                'alamat' => 'cibaduyut',
                'telepon' => '08123456789',
                'email' => 'nurahayuaul@gmail.com',
            ],
            [
                'nama_lengkap' => 'khaerunnisa',
                'jenis_kelamin' => 'perempuan',
                'tanggal_lahir' => '2009-9-11',
                'tempat_lahir' =>'bandung',
                'agama' => 'islam',
                'alamat' => 'cibaduyut',
                'telepon' => '08123456789',
                'email' => 'nurahayukha@gmail.com',
            ],
            [
                'nama_lengkap' => 'hasanah',
                'jenis_kelamin' => 'perempuan',
                'tanggal_lahir' => '2009-9-12',
                'tempat_lahir' =>'bandung',
                'agama' => 'islam',
                'alamat' => 'cibaduyut',
                'telepon' => '08123456789',
                'email' => 'nurahayuhas@gmail.com',
            ],
        ]);
    }
}
