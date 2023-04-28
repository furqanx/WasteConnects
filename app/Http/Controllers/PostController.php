<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
    {
        return view('pages.uploadpost');
    }

    public function store(Request $request)
    {
        // Validasi inputan
		$request->validate([
			'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'product_name' => 'required',
			'product_cathegory' => 'required',
			'product_price' => 'required',
			'product_description' => 'required',
		]);
		
		// Menyimpan gambar ke dalam folder "public/images"
		$imagePath = $request->file('product_image')->store('public/product_images');
		$imageName = basename($imagePath);
		
		// Menyimpan data inputan ke dalam database
		$product = new Product;
		$product->user_id = Auth::user()->id;
		$product->product_image = $imageName;
		$product->product_name = $request->product_name;
		$product->product_cathegory = $request->product_cathegory;
		$product->product_price = $request->product_price;
		$product->product_description = $request->product_description;
		$product->save();
		
		// Redirect ke halaman upload postingan
		return redirect('post.create')->with('success', 'Sampah berhasil diupload.');
    }

    public function show($id)
    {
        $products = Product::findOrFail($id);

        return view('pages.post', compact('products'));
    }

    public function search()
    {
        return view('pages.home', [
            "products" => Product::latest()->filter()->get()
        ]);
    }

    public function debug () {
		return request()->all();
	}
}
