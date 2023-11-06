<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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
Route::get('/login', [LoginController::class, 'login']);
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth:web']], function() {
    Route::get('list-book', [HomeController::class, 'listBook'])->name('list-book');
});

Route::get('delete-book/{id}', [HomeController::class, 'deleteBook'])->name('delete-book');
Route::post('book-table', [HomeController::class, 'bookTable'])->name('book-table');
Route::post('book-table/update/{id}', [HomeController::class, 'updateStatus'])->name('book-table.update');
