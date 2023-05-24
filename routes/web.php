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
Route::group(['middleware' => ['supplier']], function () {
    Route::get('/home', [App\Http\Controllers\UserController::class, 'index']);
    Route::get('/home/jk', [App\Http\Controllers\UserController::class, 'downloadJK']);
    Route::get('/inputttf', [App\Http\Controllers\UserController::class, 'inputttf']);
    Route::get('/inputfp', [App\Http\Controllers\UserController::class, 'inputfp']);
    Route::get('/download', [App\Http\Controllers\UserController::class, 'download']);
});

/*admin*/
Route::group(['middleware' => ['admin']], function () {
    Route::get('/homeadmin', [App\Http\Controllers\AdminController::class, 'index']);
    Route::get('/homeadmin/jk', [App\Http\Controllers\AdminController::class, 'downloadJK']);
    Route::get('/aturlimit', [App\Http\Controllers\AdminController::class, 'aturlimit']);
    Route::get('/aturuser', [App\Http\Controllers\AdminController::class, 'aturuser']);
    Route::get('/datattf', [App\Http\Controllers\AdminController::class, 'datattf']);
    Route::get('/datasup', [App\Http\Controllers\AdminController::class, 'datasup']);
    Route::get('/datalampfp', [App\Http\Controllers\AdminController::class, 'datalampfp']);
    Route::get('/kuotaharian', [App\Http\Controllers\AdminController::class, 'kuotaharian']);
    Route::get('/laporanttf', [App\Http\Controllers\AdminController::class, 'laporanttf']);
    Route::get('/monitoringfp', [App\Http\Controllers\AdminController::class, 'monitoringfp']);
    Route::get('/aturpemberitahuan', [App\Http\Controllers\AdminController::class, 'aturpemberitahuan']);
    Route::get('/downloadadmin', [App\Http\Controllers\AdminController::class, 'download']);
});

Route::post('/aturpemberitahuan/save_pemberitahuan', [App\Http\Controllers\AdminController::class, 'save_pemberitahuan'])->middleware('admin');
Route::get('/homeadmin/detail_pemberitahuan/{id1}', [App\Http\Controllers\AdminController::class, 'detail_pemberitahuan'])->middleware('admin');
