<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index () {
        return view('register.index');
    }

    public function store (Request $request) {

        /** memeriksa validasi inputan registrasi  */
        $this->validate($request, [
            'nama_user' => 'required|min:6|max:30',
            'email' => 'required|email',
            'password' => 'required|min:6|max:30'
        ]);
        
        /** mengirim inputan validasi ke database */
        User::create([
            'nama_user' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // $validatedData = $request->validate([
        //     'name' => 'required|min:6|max:30',
        //     'email' => 'required|email',
        //     'password' => 'required|min:6|max:30',
        //     'status' => 'required|max:30',
        //     'description' => 'required|min:6|max:255',
        //     'address' => 'required'
        // ]);

        // User::create($request->all());

        return redirect('/login');
    }

    public function debug () {
        return request()->all();
    }
}
