<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//  Route::get('/', function () {
//      return view('welcome');
//  });

// Pakai ini masih error Pak, Belum menemukan solusinya

// Route::get('/register','AuthController@register');
// Route::post('/simpanuser','AuthController@simpanuser');

Route::get('/', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/simpanuser', [AuthController::class, 'simpanuser']);
Route::post('/ceklogin', [AuthController::class, 'ceklogin']);
Route::get('/dashboard', [AuthController::class, 'dashboard']);

