<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Address;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function show($id, Request $request)
    {
        $user = User::findOrFail($id);
        $addresses = Address::all();
        $categories = Category::all();

        // mendapatkan address_current dengan address_id_session
        $address_current = Address::find($request->session()->get('address_id_session'));

        return view('user.show', compact('user', 'addresses', 'address_current'));
    }

    public function userProducts($id, Request $request)
    {
        $user = User::findOrFail($id);
        $addresses = Address::all();

        // mendapatkan address_current dengan address_id_session
        $address_current = Address::find($request->session()->get('address_id_session'));

        /**
         * Jika tidak ada Product maka akan kembali ke halaman sebelumnya
         */
        if ($user->products()->count() == 0) {
            return redirect()->back()->withErrors(['message' => 'User tidak memiliki produk']);
        }

        $products = $user->products;
        return view('user.products', compact('products', 'user', 'addresses', 'address_current'));
    }
}
