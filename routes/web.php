<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

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


Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);
// Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [DashboardController::class, 'register']);

Route::get('/', [SiswaController::class, 'index']);
Route::get('/absen', [SiswaController::class, 'absen']);
Route::post('/absen', [SiswaController::class, 'absensi']);
Route::get('/kelas', [SiswaController::class, 'kelas']);
Route::get('/kelas/{kelas}', [SiswaController::class, 'kelasDetail']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/dashboard/kelas-absen', [DashboardController::class, 'absensi']);
Route::get('/dashboard/akun-siswa', [DashboardController::class, 'siswa']);
Route::get('/dashboard/tambah-siswa', [DashboardController::class, 'tambahSiswa']);
Route::get('/dashboard/kelas', [DashboardController::class, 'kelas']);
Route::post('/dashboard/tambah-kelas', [DashboardController::class, 'storeKelas']);