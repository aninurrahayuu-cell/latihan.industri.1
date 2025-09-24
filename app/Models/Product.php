<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    //kolom/field yang boleh diisi
    protected $fillable = ['id', 'name', 'description', 'price', 'stock'];
    public $timestamp = true;
}
