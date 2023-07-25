<?php

// namespace App\Http\Controllers\Api\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\SppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\PembayaranController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::middleware(['auth','user-access:admin'])->group(function()
{
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

Route::resource('/data-siswa', SiswaController::class);
Route::resource('/data-kelas', KelasController::class);
Route::resource('/data-spp', SppController::class);
Route::resource('/data-petugas', PetugasController::class);
Route::resource('/data-pembayaran', PembayaranController::class);
Route::resource('/pembayaran/index', PembayaranController::class);
});


Route::middleware(['auth','user-access:siswa'])->group(function()
{
    Route::get('/homesiswa', [App\Http\Controllers\Admin\SiswaController::class, 'loginSiswa'])->name('siswa.home');
    Route::get('/dashboardsiswa', [App\Http\Controllers\Admin\SiswaController::class, 'loginSiswa'])->name('dashboardsiswa');
    Route::get('/logoutSiswa', [App\Http\Controllers\Admin\SiswaController::class, 'logoutSiswa'])->name('logoutSiswa');
});

Route::middleware(['auth','user-access:petugas'])->group(function()
{
    Route::get('/homepetugas', [App\Http\Controllers\Admin\PetugasController::class, 'loginPetugas'])->name('petugas.home');
    Route::get('/dashboardpetugas', [App\Http\Controllers\Admin\PetugasController::class, 'loginPetugas'])->name('dashboardpetugas');
    Route::get('/logoutPetugas', [App\Http\Controllers\Admin\PetugasController::class, 'logoutPetugas'])->name('logoutPetugas');
    // Route::resource('/data-pembayaran', PembayaranController::class);
});

Route::group(['middleware' => ['auth','user-access:admin,petugas']], function () {
    
    Route::resource('/data-pembayaran', PembayaranController::class);
    Route::resource('/data-history', PembayaranController::class);
});
// Route::middleware(['auth','user-access:siswa'])->group(function()
// {
// Route::get('/homepetugas', [App\Http\Controllers\PetugasController::class, 'loginPetugas'])->name('petugas.home');
// Route::get('/dashboardpetugas', [App\Http\Controllers\PetugasController::class, 'loginPetugas'])->name('dashboardpetugas');
// Route::get('/logout', [App\Http\Controllers\PetugasController::class, 'logoutPetugas'])->name('logout');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
    // Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    // Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
    // Route::get('/homepetugas', [App\Http\Controllers\Admin\PetugasController::class, 'loginPetugas'])->name('petugas.home');
    // Route::get('/dashboardpetugas', [App\Http\Controllers\Admin\PetugasController::class, 'loginPetugas'])->name('dashboardpetugas');
    // Route::get('/logoutPetugas', [App\Http\Controllers\Admin\PetugasController::class, 'logoutPetugas'])->name('logoutPetugas');   
// });