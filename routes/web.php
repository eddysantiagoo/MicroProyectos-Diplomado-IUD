<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posteos', [PostsController::class, 'index'])->name('posts');

Route::post('/posteos', [PostsController::class, 'store'])->name('posts');

Route::get('/posteos/{id}', [PostsController::class, 'show'])->name('posts-edit');
Route::patch('/posteos/{id}', [PostsController::class, 'update'])->name('posts-update');
Route::delete('/posteos/{id}', [PostsController::class, 'destroy'])->name('posts-destroy');