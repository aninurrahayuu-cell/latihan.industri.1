<?php

namespace App\Models;

use Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $fillable = ['id', 'nama_pembeli', 'jenis_kelamin', 'telepon'];
    public $timestamp = true;

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
