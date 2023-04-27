<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller
{
    /** method ini berfungsi untuk menampilkan postingan barang
     *  berdasarkan kategorinya
     * 
     *  penggunaanya untuk menampilkan postingan barang 
     *  di halaman home
     */
    public function show ($category)
    {
        $products = Product::where('kategori_sampah', $category)->get();

        return view('pages.home', compact('products'));
    }
}
