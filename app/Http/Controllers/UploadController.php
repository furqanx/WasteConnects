<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;


class UploadController extends Controller
{
    public function upload(){
		return view('uploadproduct');
	}

	public function proses_upload(Request $request)
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

		// Redirect ke halaman utama
		return redirect('/')->with('success', 'Sampah berhasil diupload.');
	}
}
