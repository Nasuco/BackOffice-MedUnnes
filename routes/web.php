<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('list_pasien', [App\Http\Controllers\backend\PasienController::class,'PasienList'])->name('pasien.index');
Route::get('/read_pasien/{id}', [App\Http\Controllers\backend\PasienController::class,'PasienRead']);

Route::get('list_konsultasi', [App\Http\Controllers\backend\KonsultasiController::class,'KonsultasiList'])->name('konsultasi.index');

Route::get('list_spesialisasi', [App\Http\Controllers\backend\SpesialisasiController::class,'SpesialisasiList'])->name('spesialisasi.index');

Route::get('aktivitas', [App\Http\Controllers\backend\AktivitasController::class,'AktivitasList'])->name('aktivitas.index');

Route::get('user_list', [App\Http\Controllers\backend\UsermanagementController::class,'UserList'])->name('user.index');
Route::get('/edit_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserEdit']);
Route::post('/update_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserUpdate']);
Route::get('/delete_user/{id}', [App\Http\Controllers\backend\UsermanagementController::class,'UserDelete']);
