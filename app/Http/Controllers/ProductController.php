<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Category;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        // $products = Product::all();
        $addresses = Address::all();

        if ($request->session()->has('address_id_session')) {
            $categories = Category::all();
            // mendapatkan address_current dengan address_id_session
            $address_current = Address::find($request->session()->get('address_id_session'));
            $products = Product::where('address_id', $request->session()->get('address_id_session'))->get();
            $products_count = Product::where('address_id', $request->session()->get('address_id_session'))->count();
            return view('main', compact('products', 'categories', 'addresses', 'address_current', 'products_count'));
        }

        return view('getuserAddress', compact('addresses'));
    }

    /**
     * Search berdasarkan nama, address, category jika ada
     */
    public function search(Request $request, $query = null)
    {
        $query = $request->input('query');
        $address_id = $request->input('address_id', $request->session()->get('address_id_session'));
        $category_id = $request->input('category_id');
        $category_current = Category::find($category_id);

        // menyimpan nilai address id session
        $request->session()->put('address_id_session', $address_id);
        // mendapatkan address_current dengan address_id_session
        $address_current = Address::find($request->session()->get('address_id_session'));

        // jika user tidak melakukan input untuk alamat nya maka akan kembali ke halaman sebelumny
        if (!$request->session()->has('address_id_session')) {
            return redirect()
                ->back()
                ->with('error', 'Pilih alamat dengan benar sebelum melanjutkan!');
        }

        //Untuk mengirim semua data yang digunakan untuk mendapatkan semua alamat, dan category
        $categories = Category::all();
        $addresses = Address::all();
        $products = Product::where('name', 'like', '%' . $query . '%')
            ->when($address_id, function ($query) use ($address_id) {
                return $query->where('address_id', $address_id);
            })
            ->when($category_id, function ($query) use ($category_id) {
                return $query->where('category_id', $category_id);
            })
            ->get();

        return view('search', compact('products', 'addresses', 'categories', 'address_current', 'category_current', 'query'));
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        // Jika atribut whatsapp masih kosong, tambahkan aturan validasi khusus pada objek ProfileUpdateRequest
        if (!$user->whatsapp) {
            return Redirect::route('profile.edit')->with('warning', 'Silakan cantumkan nomor WhatsApp Anda agar pembeli dapat menghubungi dengan mudah, terima kasih :) ');
        }

        $categories = Category::all();
        $addresses = Address::all();

        // mendapatkan address_current dengan address_id_session
        $address_current = Address::find($request->session()->get('address_id_session'));

        return view('product.create', compact('categories', 'addresses', 'address_current'));
    }

    public function show(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $addresses = Address::all();
        $products = $product->user->products;

        // mendapatkan address_current dengan address_id_session
        $address_current = Address::find($request->session()->get('address_id_session'));

        return view('product.show', compact('product', 'products', 'addresses', 'address_current'));
    }

    /**
     * method untuk menampilkan semua produk yang telah di posting oleh user yang telah login
     */
    public function myproducts(Request $request)
    {
        $products = Auth::user()->products;
        $addresses = Address::all();

        // mendapatkan address_current dengan address_id_session
        $address_current = Address::find($request->session()->get('address_id_session'));

        return view('product.myproduct', compact('products', 'addresses', 'address_current'));
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
            'address_id' => 'required|exists:addresses,id',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Menyimpan data product baru ke database
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->address_id = $request->address_id;

        // Mengelola file gambar yang diupload
        $image = $request->file('image');
        $filename = time() . '_' . $image->getClientOriginalName();
        $path = 'public/product_images';
        if (!Storage::exists($path)) {
            Storage::makeDirectory($path);
        }
        $image->storeAs($path, $filename);
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
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $addresses = Address::all();

        if ($product->user_id != Auth::id()) {
            return back()->with('error', 'You are not authorized to edit this product.');
        }

        return view('product.edit', compact('product', 'categories', 'addresses'));
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
            'address_id' => 'required|exists:addresses,id',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Menyimpan data product baru ke database
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->address_id = $request->address_id;

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

    /**
     * method untuk menghapus data product
     */
    public function destroy($id)
    {
        // Cari produk berdasarkan ID dan pemiliknya (user yang sedang login)
        $product = Product::where('id', $id)
            ->where('user_id', auth()->id())
            ->firstOrFail();

        // Hapus file gambar lama dari server
        Storage::delete('public/product_images/' . $product->image);

        // Hapus produk
        $product->delete();

        // Redirect ke halaman daftar produk
        return redirect()->route('myproducts');
    }
}
