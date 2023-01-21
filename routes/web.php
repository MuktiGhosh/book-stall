<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');


Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'register'])->name('register');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'registerUser'])->name('register');

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'loginUser'])->name('login');
Route::get('/home', [\App\Http\Controllers\BookController::class, 'index'])->name('books');
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');


