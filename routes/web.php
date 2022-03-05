<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController,
    App\Http\Controllers\UserController,
    App\Http\Controllers\LoginController,
    App\Http\Controllers\PegawaiController,
    App\Http\Controllers\AdminController;
use Jenssegers\Agent\Agent;

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

Route::get('/', [LoginController::class, 'mobile'])->name('login.mobile');

// Route::get('/home', function () {
    // $agent = new Agent();
    // if ($agent->isMobile()) {
        // return view('home');
    // } else {
    //     return view('alert');
    // }
// })->name('home');

// Route::get('/daftar-hadir', function () {
    // $agent = new Agent();
    // if ($agent->isMobile()) {
        // return view('absen');
    // } else {
    //     return view('alert');
    // }
// })->name('daftar-hadir');

Route::get('/detect', [HomeController::class, 'index'])->name('homes');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [LoginController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom'); 

Route::group(['namespace' => 'Admin', 'prefix' => 'admin','middleware' => ['auth','admin']], function() {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('pegawais', [PegawaiController::class, 'home'])->name('admin.pegawais');
    Route::get('pegawai/{nip}/edit', [PegawaiController::class, 'show'])->name('admin.pegawais.detail');
    Route::get('pengaturan', [AdminController::class, 'setting'])->name('admin.pengaturan');
    Route::get('laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
    Route::get('logout', [LoginController::class, 'signOut'])->name('admin.logout');
});

Route::group(['namespace' => 'User', 'prefix' => 'user','middleware' => ['auth']], function() {
        Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
        Route::get('history', [UserController::class, 'history'])->name('user.history');
        Route::get('list', [UserController::class, 'list'])->name('user.list');
        Route::get('absen/datang', [AbsensiController::class, 'absenDatang'])->name('user.pegawais');
        Route::get('absen/pulang', [AbsensiController::class, 'absenPulang'])->name('user.pegawais');
        Route::get('logout', [LoginController::class, 'signOut'])->name('user.logout');
});


// Route::get('buat-user', [UserController::class, 'makeOut'])->name('user.MakeOut');