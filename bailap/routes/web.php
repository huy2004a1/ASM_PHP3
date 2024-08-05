<?php

use App\Http\Controllers\SachController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users/{id}', [SachController::class, 'show'])->name('users.user');

Route::get('/authors/{id}', [SachController::class, 'author'])->name('users.author');

Route::get('/categories/{id}', [SachController::class, 'category'])->name('users.category');

Route::get('/books/{id}', [SachController::class, 'book'])->name('users.book');

