<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController,
    App\Http\Controllers\UserController,
    App\Http\Controllers\AbsensiStatusController,
    App\Http\Controllers\AbsensiController; 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum']], function () {
    
});

Route::resource('pegawais',PegawaiController::class);
Route::resource('users',UserController::class);
Route::resource('absens',AbsensiController::class);
Route::get('pegawai/absens/{id}',[AbsensiController::class,'pegawai']);
Route::get('hadir/absens',[AbsensiController::class,'hadir']);
Route::post('/dinas/absens',[AbsensiController::class,'dinas']);
Route::post('/datang/absens',[AbsensiController::class,'datang']);
Route::post('/pulang/absens',[AbsensiController::class,'pulang']);
Route::post('/simpan/datang/absens',[AbsensiController::class,'simpanDatang']);
Route::post('/simpan/pulang/absens',[AbsensiController::class,'simpanPulang']);
Route::resource('absensi',AbsensiStatusController::class);
Route::get('/pns/absensi',[AbsensiStatusController::class,'pns']);
Route::get('/tk/absensi',[AbsensiStatusController::class,'tk']);
Route::get('/reset/absensi',[AbsensiStatusController::class,'reset']);
Route::get('/hadir/absensi',[AbsensiStatusController::class,'hadir']);
