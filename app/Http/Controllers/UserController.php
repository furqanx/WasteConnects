<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index () {
        $nama = "Furqan Al Ghifari Zulva";
        $email = "alghifarifurqan03@gmail.com";
        $alamat = "Lamteumen";
        $peran = "provider";

        return view('firstpersonprofile', [
            'nama_user' => $nama,
            'email_user' => $email,
            'alamat_user' => $alamat,
            'peran_user' => $peran
        ]);
    }

    // public function updateProfile(Request $request)
    // {
    //     // Mendapatkan user yang sedang login
    //     $user = Auth::user();

    //     // Validasi form
    //     $request->validate([
    //         'user_name' => 'required|string|max:255',
    //         'user_address' => 'required|string|max:255',
    //         'user_birthdate' => 'required|date',
    //         'user_gender' => 'required|in:laki,perempuan',
    //         'product_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     // Update data user
    //     $user->name = $request->input('user_name');
    //     $user->address = $request->input('user_address');
    //     $user->birthdate = $request->input('user_birthdate');
    //     $user->gender = $request->input('user_gender');

    //     // Upload foto profil jika ada
    //     if ($request->hasFile('product_image')) {
    //         $image = $request->file('product_image');
    //         $filename = time() . '_' . $image->getClientOriginalName();
    //         $image->storeAs('public/product_images', $filename);
    //         $user->product_image = $filename;
    //     }

    //     // Simpan data user yang telah diupdate
    //     $user->save();

    //     // Redirect kembali ke halaman profil dengan pesan sukses
    //     return redirect('/profil')->with('success', 'Profil berhasil diupdate');
    // }

}
