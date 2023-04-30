<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index'])->name('products');

/*
-pada Laravel Breeze, rute untuk halaman login dan register dapat ditemukan di dalam file routes/auth.php.
-route setelah login dapat diubah pada RouteServiceProvider::HOME
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile{id?}', [ProfileController::class, 'show'])->name('profile');

    Route::get('/pofile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /** Route ke halaman form mengupload barang */
    Route::get('/post/create', [ProductController::class, 'create'])->name('post.create');
    /** Route untuk menyimpan data product */
    Route::post('/post', [ProductController::class, 'store'])->name('post.store');
    /** Route untuk melihat card postingan */
    Route::get('/post/{id}', [ProductController::class, 'show'])->name('post.show');
    /** DEBUG */
    Route::post('/post/debug', [ProductController::class, 'debug'])->name('post.debug');
});

require __DIR__ . '/auth.php';