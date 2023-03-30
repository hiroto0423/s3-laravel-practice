<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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



Route::get('/posts/add', [PostsController::class, 'add']);
Route::post('/posts/create', [PostsController::class, 'create']);
Route::get('posts/index', [PostsController::class,'index']);



Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});

// 管理者のみアクセス可能
Route::group(['middleware' => ['auth', 'can:admin']], function () {
    Route::get('admin', [UserController::class,'admin']);
});
