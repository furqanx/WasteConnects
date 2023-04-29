<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;

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

// Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


/** Route ke halaman home */
Route::get('/home', [HomeController::class, 'index'])->name('home');
/** Route untuk melihat postingan berdasarkan kategori */
Route::get('/home/{category}', [CategoryController::class, 'index'])->name('home.category');
/** Route untuk search bar */
Route::get('/search', [PostController::class, 'search'])->name('post.search');


/** Route ke halaman form mengupload barang */
Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
/** Route untuk menyimpan data product */
Route::post('/post', [PostController::class, 'store'])->name('post.store');
/** Route untuk melihat card postingan */
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
/** DEBUG */
Route::post('/post/debug', [PostController::class, 'debug'])->name('post.debug');


/** Route untuk menampilkan profile user */
Route::get('/profile/{id?}', [ProfileController::class, 'show'])->name('profile.show');
/** Route untuk menampilkan form untuk mengedit profile tertentu. */
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
/** Route untuk Memperbarui data profile tertentu. */
Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');




/** route ke halaman login  */
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


/** route ke halaman register  */
Route::get('/register', [RegisterController::class, 'index']);
/** route untuk menyimpan data registrasi */
Route::post('/register/store', [RegisterController::class, 'store']);
/** DEBUG untuk menyimpan data registrasi */
Route::post('/register/debug', [RegisterController::class, 'debug']);




/** route untuk halaman chat */
/** livewire routes  */
Route::get('/users', [CreateChat::class, 'render'])->name('users');
Route::get('/chat{key?}', [Main::class, 'render'])->name('chat');