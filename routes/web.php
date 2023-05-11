<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::get('/landing', function () {
    return view('landing');
});

// Halaman utama yang menampilkan semua produk
Route::get('/', [ProductController::class, 'index'])->name('products');
// Mencari berdasarkan nama barang
Route::get('/search', [ProductController::class, 'search'])->name('products.search');
// Melihat info profile berdasarkan id
Route::get('/user/{id?}', [UserController::class, 'show'])->name('user.show');

// Melihat Products dari user tertentu.
Route::get('/user/{id}/products', [UserController::class, 'userProducts'])->name('user.products');

// Melihat info product berdasarkan id
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');


/*
-pada Laravel Breeze, rute untuk halaman login dan register dapat ditemukan di dalam file routes/auth.php.
-route setelah login dapat diubah pada RouteServiceProvider::HOME
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/createProduct', [ProductController::class, 'create'])->name('product.create'); //route untuk pergi ke halaman menambahkan product
    Route::post('/createProduct', [ProductController::class, 'store'])->name('product.store'); //route untuk mengirim data ke server dengan method POST
    Route::get('/editProduct/{id}', [ProductController::class, 'edit'])->name('product.edit'); //route untuk pergi ke halaman edit product
    Route::patch('/editProduct/{id}', [ProductController::class, 'update'])->name('product.update'); //route untuk mengirim editan data product 
    Route::delete('/editProduct/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    // Untuk Melihat Product Sendiri
    Route::get('/myproducts', [ProductController::class, 'myproducts'])->name('myproducts');

});

require __DIR__ . '/auth.php';