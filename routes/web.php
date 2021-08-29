<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'home']);

Route::get('/register', [LoginController::class,'register'])->name('register')->middleware('guest');
Route::post('/register', [LoginController::class , 'register_action'])->name('register_action');
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login_action'])->name('login_action');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [AdminController::class , 'dashboard'])->middleware('role:admin');
        Route::get('/orders', [AdminController::class, 'orders'])->middleware('role:admin');
        Route::get('/users', [AdminController::class, 'users'])->middleware('role:admin');
        Route::get('/profile', [AdminController::class, 'profile'])->middleware('role:admin');
    });
    // Route::get('/login',[AdminController::class, 'login'])->middleware('guest');
    // Route::post('/login',[AdminController::class, 'login_action'])->middleware('guest');
});
