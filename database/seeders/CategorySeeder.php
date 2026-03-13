<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'DESAIN GRAFIS',
        ]);
        Category::create([
            'name' => 'UI / UX DESIGN',
        ]);
        Category::create([
            'name' => 'BRANDING DESIGN',
        ]);
        Category::create([
            'name' => 'DESAIN INTERIOR',
        ]);
        Category::create([
            'name' => 'DESAIN DIGITAL & KONTEN',
        ]);
    }
}
