<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');
    Route::get('/register', [UserController::class, 'create'])->name('user.create');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/post/{id}', [PostController::class, 'showOnePost'])->name('post');
    /*Route::post('/add/post',[PostController::class, 'store'])->name('post.store');
    Route::get('/post/list', [UserController::class, 'index'])->name('post.list');
 */
    Route::resource('posts', PostController::class);
});

Route::get('/forgotPassword', function () {
    return view('auth.forgot-password');
});
