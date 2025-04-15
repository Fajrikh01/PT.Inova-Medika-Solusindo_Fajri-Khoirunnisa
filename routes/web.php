<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WilayahController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index']);
Route::post('/', [LoginController::class, 'login']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/pendaftaran', [AdminController::class, 'pendaftaran']);
Route::get('/admin/dokter', [AdminController::class, 'dokter']);
Route::get('/admin/kasir', [AdminController::class, 'kasir']);

Route::resource('wilayah', WilayahController::class);