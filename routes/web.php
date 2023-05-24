<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;


Route::get('/index2', function () {return view('welcome');});
Route::get('/index', [App\Http\Controllers\AdminController::class, 'index2']);
Route::get('/', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/', [App\Http\Controllers\LoginController::class, 'authenticate']);
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout']);

/*user*/
Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->middleware('supplier');
Route::get('/home/jk', [App\Http\Controllers\UserController::class, 'downloadJK'])->middleware('supplier');
Route::get('/inputttf', [App\Http\Controllers\UserController::class, 'inputttf'])->middleware('supplier');
Route::get('/inputfp', [App\Http\Controllers\UserController::class, 'inputfp'])->middleware('supplier');
Route::get('/download', [App\Http\Controllers\UserController::class, 'download'])->middleware('supplier');

/*admin*/

Route::get('/homeadmin', [App\Http\Controllers\AdminController::class, 'index'])->middleware('admin');
Route::get('/homeadmin/jk', [App\Http\Controllers\AdminController::class, 'downloadJK'])->middleware('admin');
Route::get('/aturlimit', [App\Http\Controllers\AdminController::class, 'aturlimit'])->middleware('admin');
Route::get('/aturuser', [App\Http\Controllers\AdminController::class, 'aturuser'])->middleware('admin');
Route::get('/datattf', [App\Http\Controllers\AdminController::class, 'datattf'])->middleware('admin');
Route::get('/datasup', [App\Http\Controllers\AdminController::class, 'datasup'])->middleware('admin');
Route::get('/datalampfp', [App\Http\Controllers\AdminController::class, 'datalampfp'])->middleware('admin');
Route::get('/kuotaharian', [App\Http\Controllers\AdminController::class, 'kuotaharian'])->middleware('admin');
Route::get('/laporanttf', [App\Http\Controllers\AdminController::class, 'laporanttf'])->middleware('admin');
Route::get('/monitoringfp', [App\Http\Controllers\AdminController::class, 'monitoringfp'])->middleware('admin');
Route::get('/aturpemberitahuan', [App\Http\Controllers\AdminController::class, 'aturpemberitahuan'])->middleware('admin');
Route::get('/downloadadmin', [App\Http\Controllers\AdminController::class, 'download'])->middleware('admin');


Route::post('/aturpemberitahuan/save_pemberitahuan', [App\Http\Controllers\AdminController::class, 'save_pemberitahuan'])->middleware('admin');
Route::get('/homeadmin/detail_pemberitahuan/{id1}', [App\Http\Controllers\AdminController::class, 'detail_pemberitahuan'])->middleware('admin');