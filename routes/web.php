<?php
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', fn () => view('welcome'))->name('dashboard');
Route::get('/products', fn () => view('products'));

// Register
Route::get('/register-user',  fn () => view('auth.register-user'))->name('register-user');
Route::get('/register-umkm', fn () => view('auth.register-umkm'))->name('register-umkm');
Route::get('/login',fn () => view('auth.login'))->name('login');
