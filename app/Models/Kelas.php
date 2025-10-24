<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
     use Hasfactory;
    protected $fillable = ['id', 'nama_kelas'];
    public $timestamp = true;

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
}
