<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title' => 'Samsung Galaxy A34',
            'price' => '19.03',
            'quantity' => '5',
            'category_id'=>2,
            'brand_id' =>2,
            'description' => 'Samsung Galaxy A34 128GB rom, 8Gb ram, 5G'
        ]);
        Product::create([
            'title' => 'Samsung Galaxy A54',
            'price' => '19.03',
            'quantity' => '5',
            'category_id'=>2,
            'brand_id' =>2,
            'description' => 'Samsung Galaxy A54 128GB rom, 8Gb ram, 5G'
        ]);
    }
}
