<?php

use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CongDiemController;
use Illuminate\Support\Facades\DB;

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

// Route::get('/',[CongDiemController::class,'welcome']);
// Route::get('yc1',[CongDiemController::class,'yeucau1']);
// Route::get('yc2',[CongDiemController::class,'yeucau2']);
// Route::get('yc3',[CongDiemController::class,'yeucau3']);
// Route::get('yc4',[CongDiemController::class,'yeucau4']);
// Route::get('yc5',[CongDiemController::class,'yeucau5']);
// Route::get('yc6',[CongDiemController::class,'yeucau6']);
// Route::get('yc7',[CongDiemController::class,'yeucau7']);
// Route::get('yc8', [CongDiemController::class, 'yeucau8']);
// Route::get('yc9', [CongDiemController::class, 'yeucau9']);
// Route::get('yc10', [CongDiemController::class, 'yeucau10']);
// Route::get('yc11', [CongDiemController::class, 'yeucau11']);
// Route::get('yc12', [CongDiemController::class, 'yeucau12']);
// Route::get('yc13', [CongDiemController::class, 'yeucau13']);
// Route::get('yc14', [CongDiemController::class, 'yeucau14']);
// Route::get('yc15', [CongDiemController::class, 'yeucau15']);

//lap3
//  Route::get('/', [TinController::class, 'index']);
//  Route::get('/tin/{id}', [TinController::class, 'chitiet']);
//  Route::get('/cat/{idLT}', [TinController::class, 'tintrongloai']);

 //lap5
 Route::get("/tin/ds", [TinController::class, 'index']);
 Route::get("/tin/them", [TinController::class, 'them'])->name('tin.them');
 Route::POST("/tin/them", [TinController::class, 'them_']);
 Route::get('/tin/xoa/{id}', [TinController::class, 'xoa'])->name('tin.xoa');
 Route::get('/tin/capnhat/{id}', [TinController::class, 'capnhat'])->name('tin.capnhat');
 Route::post('/tin/capnhat/{id}', [TinController::class, 'capnhat_'])->name('tin.capnhat_');


