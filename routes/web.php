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

Route::get('/', [HomeController::class, 'index'] )->name('index');

Route::get('/about', [HomeController::class, 'about'] )->name('about');

Auth::routes();

Route::middleware('auth')->group(function () {

    Route::get('/services', [HomeController::class, 'services'] )->name('services');
    
    Route::get('/ceksaldo', [HomeController::class, 'ceksaldo'] )->name('ceksaldo');
    
    Route::get('/gantipin', [HomeController::class, 'gantipin'] )->name('gantipin');

    Route::get('/transfer', [HomeController::class, 'transfer'] )->name('transfer');

});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
