<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\TryoutController;
use App\Http\Controllers\KartuSoalController;
use App\Http\Controllers\JenisSoalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/beranda', [AdminController::class, 'index'])->name('admin.beranda');
    Route::get('/user', [UserController::class, 'index'])->name('admin.user');
    Route::post('CariMapel', [MataPelajaranController::class, 'cariMapel'])->name('cariMapel');
    Route::resource('mapel', MataPelajaranController::class)->name('mapel', 'admin.mapel');
    Route::post('CariTryout', [TryoutController::class, 'cariTryout'])->name('cariTryout');
    Route::resource('tryout', TryoutController::class)->name('tryout', 'admin.tryout');
    Route::post('CariKartu', [KartuSoalController::class, 'cariKartu'])->name('cariKartu');
    Route::resource('kartu', KartuSoalController::class)->name('kartu', 'admin.kartu');
    Route::post('CariJenis', [JeniSSoalController::class, 'cariJenis'])->name('cariJenis');
    Route::resource('jenis', JenisSoalController::class)->name('jenis', 'admin.jenis');
});

Route::get('/home', [HomeController::class, 'index'])->name('home.user');

Route::get('/welcome', [HomeController::class, 'welcome'])->name('home.welcome');


//User Route
// Route::middleware(['auth','user-role:user'])->group(function()
// {
//     Route::get('/user/home',[HomeController::class, 'userHome'])->name('home.user');
// });

//Admin Route
// Route::middleware(['auth','user-role:admin'])->group(function()
// {
//     Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('home.admin');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
