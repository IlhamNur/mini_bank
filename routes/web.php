<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::resource('home', HomeController::class);

Route::get('/about', [HomeController::class, 'index'] )->name('about');
Auth::routes();

Route::get('/ceksaldo', [HomeController::class, 'index'] )->name('ceksaldo');
Auth::routes();

Route::get('/gantipin', [HomeController::class, 'index'] )->name('gantipin');
Auth::routes();

Route::get('/login', [HomeController::class, 'index'] )->name('login');
Auth::routes();

Route::get('/logout', [HomeController::class, 'index'] )->name('logout');
Auth::routes();

Route::get('/services', [HomeController::class, 'index'] )->name('services');
Auth::routes();

Route::get('/signform', [HomeController::class, 'index'] )->name('signform');
Auth::routes();

Route::get('/signform2', [HomeController::class, 'index'] )->name('signform2');
Auth::routes();

Route::get('/transfer', [HomeController::class, 'index'] )->name('transfer');
Auth::routes();
