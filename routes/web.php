<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfilerController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// routes posts
Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::post('/post/create', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('/post/update/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('posts.edit');
Route::post('/post/update/{id}', [App\Http\Controllers\PostController::class, 'storeEdit'])->name('posts.storeEdit');
Route::get('/post/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::get('/post/delete/{id}', [App\Http\Controllers\PostController::class, 'delete'])->name('posts.delete');

// routes message
Route::post('/post/{id}/create/message', [App\Http\Controllers\MessagesController::class, 'store'])->name('comment.store');

//profiler
Route::get('/profiler', [ProfilerController::class, 'index'])->name('profiller');

// admin
Route::middleware('admin')->group(function () {
    Route::get('/admin/home', [AdminController::class, 'index'])->name('admin.index');
});
