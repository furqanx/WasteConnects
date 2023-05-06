<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
            Product::factory()
                ->count(5)
                ->create([
                    'user_id' => $user->id,
                ]);
        });

        /**
         * Copy no-image for product from seeder.
         */
        $filePath = public_path('product_images/no-image.png');
        $storagePath = 'public/product_images/no-image.png';

        // create the directory if it doesn't exist
        Storage::makeDirectory(dirname($storagePath));

        // copy the file to the storage path
        File::copy($filePath, Storage::path($storagePath));
    }
}
