<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = \App\Models\User::all(); // ambil semua user
        // buat 5 produk untuk setiap user
        $users->each(function ($user) {
            Product::factory()->count(5)->create([
                'user_id' => $user->id
            ]);
        });
    }
}
