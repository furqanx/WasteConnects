<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Kaca',
            'image' => 'category1.png',
        ]);

        Category::create([
            'name' => 'Plastik',
            'image' => 'category2.png',
        ]);

        Category::create([
            'name' => 'Kertas',
            'image' => 'category3.png',
        ]);

        Category::create([
            'name' => 'Logam',
            'image' => 'category4.png',
        ]);

        Category::create([
            'name' => 'Tekstil',
            'image' => 'category5.png',
        ]);

        Category::create([
            'name' => 'Elektronik',
            'image' => 'category6.png',
        ]);
    }
}
