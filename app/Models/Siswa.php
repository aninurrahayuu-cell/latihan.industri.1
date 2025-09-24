<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use Hasfactory;
    protected $fillable = ['id', 'nama_lengkap','jenis_kelamin', 'tanggal_lahir', 'kelas'];
    public $timestamp = true;
}
