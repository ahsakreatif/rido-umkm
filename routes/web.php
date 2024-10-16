<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', fn () => view('welcome'));
Route::get('/products', fn () => view('products'));
Route::get('/register-umkm', fn() => view(('register.register-umkm')));
Route::get('/register',fn() => view('register.register-user'));
