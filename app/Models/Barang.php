<?php

namespace App\Models;

use Hasfactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    
    protected $fillable = ['id', 'nama_barang', 'merk', 'harga', 'stock'];
    public $timestamp = true;

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }
}
