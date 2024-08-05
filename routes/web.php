<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
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

Route::get('/', [TinController::class, 'index'])->name('index');
// Route::get('admin', function () {
//     return view('admin.index');
// });
//index
Route::get('/index', [TinController::class, 'index'])->name('index');
Route::get('/admin', [AdminController::class, 'adminIndex'])->name('admin.index');
//acount
Route::get('/list-account', [AdminController::class, 'accountIndex'])->name('account.index');
Route::delete('accounts/{account}', [AdminController::class, 'destroy'])->name('account.destroy');

//member
Route::get('/contact', [TinController::class, 'contact'])->name('contact');
Route::get('/about-me', [TinController::class, 'aboutMe'])->name('about-me');
Route::get('/about-us', [TinController::class, 'aboutUs'])->name('about-us');
Route::get('detail/{id}', [TinController::class, 'detail'])->name('detail');
Route::get('/thoi-su', [TinController::class, 'thoisu'])->name('thoisu');
Route::get('/the-thao', [TinController::class, 'thethao'])->name('thethao');
Route::get('/nghe-thuat', [TinController::class, 'nghethuat'])->name('nghethuat');
Route::get('/tin-tuc', [TinController::class, 'tinTuc'])->name('tintuc');

//danh mục
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');


//tin tức
Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');

//account
Route::get('login', [AuthenController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthenController::class, 'handleLogin']);
Route::get('register', [AuthenController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthenController::class, 'handleRegister']);
Route::post('logout', [AuthenController::class, 'logout'])->name('logout');




