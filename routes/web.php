<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'index']);
Route::get('/latestcategoryList', [CategoryController::class, 'latestPostForEachCategory']);
Route::get('/numberofposts', [PostController::class, 'gettingNumberOfPosts']);
Route::get('/posts/{id}/delete', [PostController::class, 'delete']);
Route::get('/posts/soft-deleted', [PostController::class, 'showSoftDeletedPosts']);
Route::get('/categories/{id}/posts', [CategoryController::class, 'getPosts']);
