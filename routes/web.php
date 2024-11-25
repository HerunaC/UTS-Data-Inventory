<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LaporanController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/kategori-barang', [KategoriBarangController::class, 'index']);
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/laporan', [LaporanController::class, 'index']);