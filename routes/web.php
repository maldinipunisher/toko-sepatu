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

Route::get('/register', [LoginController::class,'register'])->name('register');
Route::post('/register', [LoginController::class , 'register_action'])->name('register_action');
Route::get('/login', [LoginController::class, 'login'])->name('login')->name('login');
Route::post('/login', [LoginController::class, 'login_action'])->name('login_action');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class , 'dashboard']);
    Route::get('/login',[AdminController::class, 'login']);
    Route::post('/login',[AdminController::class, 'login_action']);

});
