<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CathegoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Http\Livewire\Chat\CreateChat;
use App\Http\Livewire\Chat\Main;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();


/** route ke halaman home */
Route::get('/home', [PostController::class, 'showall'])->middleware('auth');
Route::get('/home/{category}', [PostController::class, 'show_byCategory'])->middleware('auth');





/** route ke halaman login  */
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/authenticate', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);




/** route ke halaman register  */
Route::get('/register', [RegisterController::class, 'index']);
/** route untuk menyimpan data registrasi */
Route::post('/register/store', [RegisterController::class, 'store']);
/** DEBUG untuk menyimpan data registrasi */
Route::post('/register/debug', [RegisterController::class, 'debug']);




/** route ke halaman form mengupload barang */
Route::get('/uploadproduct', [UploadController::class, 'index'])->middleware('auth');
/** route untuk menyimpan data product */
Route::post('/uploadproduct/store', [UploadController::class, 'store']);
/** DEBUG route untuk menyimpan data upload data product */
Route::post('/uploadproduct/debug', [UploadController::class, 'debug']);


/** TUNDA */
/** route ke halaman profile */
Route::get('/profile/{id}', [PostController::class, 'show_byId'])->middleware('auth');
/** DEBUG route untuk mengedit profil user */
Route::post('/profile/proses', [PostController::class, 'debug']);


/** TUNDA */
/** route untuk melihat card postingan */
Route::get('/post/{id}', [PostController::class, 'show_byId'])->middleware('auth');


/** route untuk halaman chat */
/** livewire routes  */
Route::get('/users',CreateChat::class)->name('users')->middleware('auth');
Route::get('/chat{key?}',Main::class)->name('chat')->middleware('auth');

// /** route untuk melihat barang berdasarkan kategori */  
// Route::get('/homebycategory/{category}', [PostController::class, 'show_byCategory']);

// Route::get('user', [UserController::class, 'index']);
// Route::get('post', [PostController::class, 'index']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
