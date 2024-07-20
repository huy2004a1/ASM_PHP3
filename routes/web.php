<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinController;

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
    return view('index');
});
Route::get('admin', function () {
    return view('admin');
});
Route::get('/index', [TinController::class, 'index'])->name('index');

Route::get('/contact', [TinController::class, 'contact'])->name('contact');
Route::get('/about-me', [TinController::class, 'aboutMe'])->name('about-me');
Route::get('/about-us', [TinController::class, 'aboutUs'])->name('about-us');
