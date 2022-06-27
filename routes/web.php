<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\NasabahController;
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

Route::get('/', [HomeController::class, 'index'] )->name('home');

Route::get('/about', [HomeController::class, 'about'] )->name('about');
    
Route::get('/services', [HomeController::class, 'services'] )->name('services');
    
Route::get('/signup', [HomeController::class, 'signup'] )->name('signup');

Route::post('/signup-form', [SignUpController::class, 'store'])->name('signup.store');

// Route::get('/ceksaldo', [HomeController::class, 'ceksaldo'] )->name('ceksaldo');
    
// Route::get('/gantipin', [HomeController::class, 'gantipin'] )->name('gantipin');

// Route::get('/transfer', [HomeController::class, 'transfer'] )->name('transfer');
    
Auth::routes();

Route::group(['middleware' => ['role:admin']], function () {
    
    Route::get('/dashboard', [HomeController::class, 'dashboard'] )->name('dashboard');

    Route::get('/konfigurasi', [HomeController::class, 'konfigurasi'] )->name('konfigurasi');

    Route::get('/transaksi', [HomeController::class, 'transaksi'] )->name('transaksi');

    Route::get('/regristasi-nasabah', [HomeController::class, 'regristrasiNasabah'] )->name('regristrasi.nasabah');

    Route::post('/nasabah-form', [NasabahController::class, 'store'])->name('nasabah.store');

    Route::post('/konfigurasi-form', [KonfigurasiController::class, 'store'])->name('konfigurasi.store');

});

Route::group(['middleware' => ['role:cs']], function () {
    
    Route::get('/dashboard', [HomeController::class, 'dashboard'] )->name('dashboard');

    Route::get('/regristasi-nasabah', [HomeController::class, 'regristrasiNasabah'] )->name('regristrasi.nasabah');

    Route::post('/nasabah-form', [NasabahController::class, 'store'])->name('nasabah.store');

});

Route::group(['middleware' => ['role:teller']], function () {

    Route::get('/transaksi', [HomeController::class, 'transaksi'] )->name('transaksi');

    Route::get('/transaksi-form', [HomeController::class, 'store'] )->name('transaksi.store');

});