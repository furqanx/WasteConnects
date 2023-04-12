<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;

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

// Route::get('/home', [HomeController::class, 'index']);
// Route::get('/home/{kategori}', [HomeController::class, 'index']);

// livewire routes 
Route::get('/users',CreateChat::class)->name('users');
Route::get('/chat{key?}',Main::class)->name('chat');


// Route::get('user', [UserController::class, 'index']);
// Route::get('post', [PostController::class, 'index']);
