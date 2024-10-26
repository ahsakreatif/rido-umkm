<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\UserRegisterController;
use App\Http\Controllers\Auth\UmkmRegisterController;

// Route::get('/', fn () => view('welcome'))->name('dashboard');
// Route::get('/', action: Controllers\HomeController::class);
Route::get('/',[HomeController::class,'index'])->name('dashboard');
Route::get('/products', action: Controllers\ProductsController::class);


// Register
Route::get('/register-user', [UserRegisterController::class, 'showRegistrationForm'])->name('register-user');
Route::post('/register-user', [UserRegisterController::class, 'register']);
Route::get('/register-umkm', [UmkmRegisterController::class, 'showRegistrationForm'])->name('register-umkm');
Route::post('/register-umkm', [UmkmRegisterController::class, 'register']);
Route::get('/login',fn () => view('auth.login'))->name('login');

