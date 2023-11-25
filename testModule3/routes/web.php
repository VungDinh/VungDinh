<?php

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/list', function () {
    return view('list');
})->name('list');
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/update', function () {
    return view('update');
})->name('update');

Route::get('/login', function () {
    return view('login');
})->name('login');
