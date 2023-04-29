<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat data produk pertama dan menambahkan kategori "Elektronik" dan "Pakaian"
        $product1 = Product::create([
            'name' => 'Laptop',
            'description' => 'Laptop keren dengan spesifikasi tinggi',
            'price' => 10000000,
            'location' => 'Jakarta',
            'user_id' => 1,
        ]);

        $category1 = Category::where('name', 'Elektronik')->first();
        $category2 = Category::where('name', 'Kain')->first();

        $product1->categories()->attach([$category1->id, $category2->id]);

        // Membuat data produk kedua dan menambahkan kategori "Makanan"
        $product2 = Product::create([
            'name' => 'Sate Ayam',
            'description' => 'Sate ayam lezat dengan bumbu kacang yang pas',
            'price' => 15000,
            'location' => 'Surabaya',
            'user_id' => 1,
        ]);

        $category3 = Category::where('name', 'Plastik')->first();

        $product2->categories()->attach($category3->id);
    }
}
