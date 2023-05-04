<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all();
        $categories = Category::all();

        return view('main', compact('products', 'categories'));
    }

    /**
     * Cari berdasarkan nama
     */
    public function search(Request $request, $query = null)
    {
        $query = $request->input('query') ?? $query;
        $products = Product::where('name', 'like', "%$query%")->get();

        return view('search', compact('products'));
    }

    /**
     * list produk berdasarkan category
     */
    public function searchByCategory(Category $category)
    {
        $products = $category->products()->paginate(10);
        $categories = Category::all();
        return view('main', compact('products', 'categories'));
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

    /**
     * method untuk store data product ke database
     */
    public function store(Request $request)
    {
        // Validasi data yang diinputkan
        $validatedData = $request->validate([
            'name' => 'required|max:30',
            'description' => 'required',
            'price' => 'required|numeric',
            'location' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Menyimpan data product baru ke database
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->location = $request->location;

        // Mengelola file gambar yang diupload
        $image = $request->file('image');
        $filename = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('public/product_images', $filename);
        $product->image = $filename;

        // Menyimpan data category_id dari request ke product
        $product->category_id = $request->category_id;

        // Menyimpan user_id terkait
        $product->user_id = Auth::id();
        // Menyimpan data product ke database
        $product->save();

        // Redirect ke halaman detail product yang baru saja dibuat
        return redirect()->route('product.show', $product->id);
    }

    /**
     * akan menuju ke halaman edit untuk mengedit data
     */
    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);

        if ($product->user_id != Auth::id()) {
            return back()->with('error', 'You are not authorized to edit this product.');
        }

        return view('product.edit', compact('product', 'categories'));
    }

    /**
     * method untuk mengurus update data
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        //Validasi bahwa product benar punya user yang melakukan.
        if ($product->user_id != Auth::id()) {
            abort(403, 'Anda tidak diizinkan untuk melakukan aksi ini.');
        }

        // Validasi data yang diinputkan
        $validatedData = $request->validate([
            'name' => 'required|max:30',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'location' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Menyimpan data product baru ke database
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->location = $request->location;

        if ($request->hasFile('image')) {
            // Mengelola file gambar yang diupload
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/product_images', $filename);
            // Hapus file gambar lama dari server
            Storage::delete('public/product_images/' . $product->image);
            $product->image = $filename;
        }

        // Menyimpan data category_id dari request ke product
        $product->category_id = $request->category_id;

        // Menyimpan data product ke database
        $product->save();

        // Redirect ke halaman detail product yang baru saja dibuat
        return redirect()->route('product.show', $product->id);
    }
}
