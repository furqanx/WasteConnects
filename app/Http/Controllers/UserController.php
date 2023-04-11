<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
