<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('test');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/list-book', [HomeController::class, 'listBook'])->name('list-book');
Route::post('book-table', [HomeController::class, 'bookTable'])->name('book-table');
