<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /** method ini berfungsi untuk menampilkan postingan 
     * 
     * penggunaanya untuk menampilkan card postingan barang
     * di halaman home
     */
    public function showall () 
    {
        $products = Product::all();
        return view('home', compact('products'));
    }
    

    /** method ini berfungsi untuk menampilkan nama, harga, gambar 
     * deskripsi barang berdasarkan id nya saja 
     * 
     * penggunaanya untuk menampilkan card postingan barang
     * di halaman post 
     */
    public function show_byId($id)
    {
        $products = Product::find($id);
        return view('post', [
            'products' => $products, 
            'price-tag-icon' => '/img/price-tag.svg', 
            'location-icon' => '/img/location icon.svg'
        ]);
    }


    /** method ini berfungsi untuk menampilkan postingan barang
     *  berdasarkan kategorinya
     * 
     *  penggunaanya untuk menampilkan postingan barang 
     *  di halaman home
     */
    public function show_byCategory($category)
    {
        /** perhatikan lagi nanti disini  */
        $products = Product::where('kategori_sampah', $category)->get();
        return view('home', compact('products'));
    }
}
