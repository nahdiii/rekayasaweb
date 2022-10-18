<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
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
    return view('welcome');
});

route::get('login', [LoginController::class,'loginPage'])->name('login');
route::get('registrasi', [LoginController::class,'registrasi'])->name('registrasi');
route::post('postRegistrasi', [LoginController::class,'postRegistrasi'])->name('postRegistrasi');

route::get('data-pengguna', [PenggunaController::class,'index'])->name('data-pengguna');
route::get('hapus-pengguna/{id}', [PenggunaController::class,'destroy'])->name('hapus-pengguna');
route::get('ubah-pengguna/{id}', [PenggunaController::class,'edit'])->name('ubah-pengguna');
route::post('simpan-ubah-pengguna/{id}', [PenggunaController::class,'update'])->name('simpan-ubah-pengguna');
