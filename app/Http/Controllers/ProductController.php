<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    {
        $products = Product::all();
        $categories = Category::all();
        return view('main', compact('products', "categories"));
    }
}
