<?php

namespace App\Models;

use HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    protected $fillable = ['id', 'nomor', 'id_pengguna'];
    public $timestamp   = true; 

     public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }
}
