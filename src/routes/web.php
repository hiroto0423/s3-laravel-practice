<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\EmailVerificationController;

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



Route::middleware(['auth','verified'])->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});

// 管理者のみアクセス可能
Route::group(['middleware' => ['auth', 'can:admin']], function () {
    Route::get('admin', [UserController::class,'admin']);
});



Auth::routes(['verify' => true]);
Route::get('/email/verify', [EmailVerificationController::class, 'index'])->middleware(['auth'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->middleware(['auth', 'signed'])->name('verification.verify');
Route::post('/email/resend', [EmailVerificationController::class, 'resend'])->middleware(['auth', 'throttle:6,1'])->name('verification.send');


