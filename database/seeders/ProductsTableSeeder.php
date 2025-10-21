<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([ 
        [
        'name' => "Basreng",
        'description' => "crunchy",
        'price' => 3000,
        'stock' => 5000,
        ],
        [
        'name' => "Seblak",
        'description' => "gurih",
        'price' => 15000,
        'stock' => 100,
        ],
        [
        'name' => "Cimol",
        'description' => "enak",
        'price' => 5000,
        'stock' => 150,
        ],
        [
        'name' => "Cireng",
        'description' => "mantap",
        'price' => 2000,
        'stock' => 250,
        ],
        [
        'name' => "Citul",
        'description' => "lezat",
        'price' => 2000,
        'stock' => 30,
        ],
        [
        'name' => "Cirambay",
        'description' => "nikmat",
        'price' => 5000,
        'stock' => 129,
        ],
        [
        'name' => "Baso",
        'description' => "sangat nikmat",
        'price' => 1000,
        'stock' => 800,
        ],
        [
        'name' => "Makroni",
        'description' => "enak",
        'price' => 5000,
        'stock' => 100,
        ],
        [
        'name' => "Keju",
        'description' => "Nikmat",
        'price' => 3000,
        'stock' => 5000,
        ],
        [
        'name' => "Coklat",
        'description' => "manis",
        'price' => 2500,
        'stock' => 100,
        ],
        ]);
    }
}