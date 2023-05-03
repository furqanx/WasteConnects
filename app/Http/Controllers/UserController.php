<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    public function userProducts($id)
    {
        $user = User::findOrFail($id);

        /**
         * Jika tidak ada Product maka akan kembali ke halaman sebelumnya
         */
        if ($user->products()->count() == 0) {
            return redirect()->back()->withErrors(['message' => 'User tidak memiliki produk']);
        }

        $products = $user->products;
        return view('user.products', compact('products', 'user'));
    }
}
