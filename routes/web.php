<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CathegoryController;

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

Auth::routes();

/** route ke halaman home */
Route::get('/home', [PostController::class, 'showall']);

/** route ke halaman profile */
Route::get('/profile/{id}', [PostController::class, 'show_byId']);

/** route untuk melihat card postingan */
Route::get('/post/{id}', [PostController::class, 'show_byId']);

/** route untuk mengupload barang  TUNDA TERLEBIH DAHULU */
Route::get('/uploadproduct', [UploadController::class, 'upload']);
Route::post('/uploadproduct/proses', [UploadController::class, 'proses_upload']);

/** livewire routes  */
Route::get('/users',CreateChat::class)->name('users');
Route::get('/chat{key?}',Main::class)->name('chat');



/** debugging */
// Route::get('/profile', function () {
//     return view('profile');
// });

// /** route untuk melihat barang berdasarkan kategori */  
// Route::get('/homebycategory/{category}', [PostController::class, 'show_byCategory']);




// Route::get('user', [UserController::class, 'index']);
// Route::get('post', [PostController::class, 'index']);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
