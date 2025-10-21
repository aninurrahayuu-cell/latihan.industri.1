<?php

// database/seeders/RelasiSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Wali;

class RelasiSeeder extends Seeder
{
    public function run()
    {
        $mahasiswa = Mahasiswa::create([
            'nama' => 'Ani Nur Rahayu',
            'nim' => '555555',
        ]);

        Wali::create([
            'nama' => 'Pak Ujang',
            'id_mahasiswa' => $mahasiswa->id
        ]);
    }
}
