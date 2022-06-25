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

Route::get('/', [HomeController::class, 'index'] )->name('home');

Route::get('/about', [HomeController::class, 'about'] )->name('about');
    
Route::get('/services', [HomeController::class, 'services'] )->name('services');
    
Route::get('/dashboard', [HomeController::class, 'dashboard'] )->name('dashboard');
    
Auth::routes();

Route::group(['middleware' => ['role:nasabah']], function () {

    Route::get('/ceksaldo', [HomeController::class, 'ceksaldo'] )->name('ceksaldo');
    
    Route::get('/gantipin', [HomeController::class, 'gantipin'] )->name('gantipin');

    Route::get('/transfer', [HomeController::class, 'transfer'] )->name('transfer');

});

Route::group(['middleware' => ['role:admin']], function () {
    //
});

Route::group(['middleware' => ['role:cs']], function () {
    //
});

Route::group(['middleware' => ['role:teller']], function () {
    //
});