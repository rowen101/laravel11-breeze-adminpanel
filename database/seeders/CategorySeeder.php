<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => 'Computer',
            'slug' => 'computer',
        ]);
        Category::create([
            'title' => 'Phone',
            'slug' => 'Phone',
        ]);
        Category::create([
            'title' => 'Watch',
            'slug' => 'watch',
        ]);
    }
}
