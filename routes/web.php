<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;

// Route::get('/', fn () => view('welcome'))->name('dashboard');
// Route::get('/', action: Controllers\HomeController::class);
Route::get('/',[HomeController::class,'index'])->name('dashboard');
Route::get('/products', action: Controllers\ProductsController::class);


// Register
Route::get('/register-user',  fn () => view('auth.register-user'))->name('register-user');
Route::get('/register-umkm', fn () => view('auth.register-umkm'))->name('register-umkm');
Route::get('/login',fn () => view('auth.login'))->name('login');
