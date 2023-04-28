<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index($category)
    {
        $products = Product::where('kategori_sampah', $category)->get();

        return view('pages.home', compact('products'));
    }
}
