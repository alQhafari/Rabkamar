<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;

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
    return view('home',[
        'title' => 'Beranda',
        'active' => 'Home'
    ]);
})->middleware('guest')->name('home');

Route::get('/about', function () {
    return view('about', [
        'title' => 'Tentang Kami',
        'active' => 'About'
    ]);
})->middleware('guest')->name('about');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [UserController::class, 'register'])->middleware('guest')->name('register');
Route::post('/register', [UserController::class, 'insert']);
Route::get('/dashboard/akun/{user:id}', [UserController::class, 'akun'])->middleware('auth');
Route::get('/dashboard/pesan', [UserController::class, 'pesan'])->middleware('auth');

Route::post('/dashboard/pesan/order', [OrderController::class, 'order'])->middleware('auth');
Route::get('/dashboard/pesan/ordered/{order:id}', [OrderController::class, 'ordered'])->middleware('auth');
Route::get('/dashboard/riwayat/{user:id}', [OrderController::class, 'history'])->middleware('auth');
