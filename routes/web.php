<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\KonfigurasiController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\TransaksiController;
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

Route::group(['middleware' => ['role:admin|cs|teller']], function () {
    
    Route::post('/konfigurasi-form/{konfigurasi}', [KonfigurasiController::class, 'update'] )->name('konfigurasi.update');
    
    Route::get('/dashboard', [HomeController::class, 'dashboard'] )->name('dashboard');

});

Route::group(['middleware' => ['role:admin|cs']], function () {
    
    Route::get('/registrasi', [HomeController::class, 'registrasiNasabah'] )->name('dashboard.registrasi');

    Route::post('/nasabah-form', [NasabahController::class, 'store'])->name('nasabah.store');

});

Route::group(['middleware' => ['role:admin|teller']], function () {

    Route::get('/transaksi', [HomeController::class, 'transaksi'] )->name('dashboard.transaksi');

    Route::get('/mutasi', [HomeController::class, 'mutasi'] )->name('mutasi');

    Route::post('/transaksi-debet/{debet}', [TransaksiController::class, 'debet'] )->name('transaksi.debet');

    Route::post('/transaksi-kredit/{kredit}', [TransaksiController::class, 'kredit'] )->name('transaksi.kredit');

});

