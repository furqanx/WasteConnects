<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index ()
    {
        return view('home', [
            "products" => Product::latest()->filter()->get()
        ]);
    }

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

        return view('post', compact('products'));
    }
}
