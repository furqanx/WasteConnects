<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $products = Product::all();
        $categories = Category::all();

        return view('main', compact('products', "categories"));
    }

    public function create()
    {
        $categories = Category::all();

        return view('product.create', compact('categories'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('product.show', compact('product'));
    }

    /**
     * method untuk menampilkan semua produk yang telah di posting oleh user yang telah login
     */
    public function myproducts()
    {
        $products = Auth::user()->products;
        return view('product.myproduct', compact('products'));
    }
}