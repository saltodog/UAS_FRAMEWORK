<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
// Route::post('login', [AuthController::class, 'login']);



Route::get('user', [UserController::class, 'index']);
Route::get('user/tambah', [UserController::class, 'tambah']);
Route::post('user/tambah', [UserController::class, 'tambahAksi']);
Route::get('user/edit/{id}', [UserController::class, 'edit']);
Route::patch('user/edit/{id}', [UserController::class, 'editAksi']);
Route::get('user/delete/{id}', [UserController::class, 'delete']);

Route::get('kategori', [KategoriController::class, 'index']);
Route::get('kategori/tambah', [KategoriController::class, 'tambah']);
Route::post('kategori/tambah', [KategoriController::class, 'tambahAksi']);
Route::get('kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::patch('kategori/edit/{id}', [KategoriController::class, 'editAksi']);
Route::get('kategori/delete/{id}', [KategoriController::class, 'delete']);

Route::get('buku', [BukuController::class, 'index']);
Route::get('buku/tambah', [BukuController::class, 'tambah']);
Route::post('buku/tambah', [BukuController::class, 'tambahAksi']);
Route::get('buku/edit/{id}', [BukuController::class, 'edit']);
Route::patch('buku/edit/{id}', [BukuController::class, 'editAksi']);
Route::get('buku/delete/{id}', [BukuController::class, 'delete']);

// anggota
Route::get('anggota', [AnggotaController::class, 'index']);
Route::get('anggota/tambah', [AnggotaController::class, 'tambah']);
Route::post('anggota/tambah', [AnggotaController::class, 'tambahAksi']);
Route::get('anggota/edit/{id}', [AnggotaController::class, 'edit']);
Route::patch('anggota/edit/{id}', [AnggotaController::class, 'editAksi']);
Route::get('anggota/delete/{id}', [AnggotaController::class, 'delete']);
// peminjaman
Route::get('peminjaman', [PeminjamanController::class, 'index']);
Route::get('peminjaman/tambah', [PeminjamanController::class, 'tambah']);
Route::post('peminjaman/tambah', [PeminjamanController::class, 'tambahAksi']);
Route::get('peminjaman/edit/{id}', [PeminjamanController::class, 'edit']);
Route::patch('peminjaman/edit/{id}', [PeminjamanController::class, 'editAksi']);
Route::get('peminjaman/delete/{id}', [PeminjamanController::class, 'delete']);
