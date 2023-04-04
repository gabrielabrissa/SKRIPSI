<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


Route::get('/', function () {return view('welcome');});
Route::get('/login', function () {return view('login');});
/*user*/
Route::get('/home', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/inputttf', [App\Http\Controllers\UserController::class, 'inputttf']);
Route::get('/inputfp', [App\Http\Controllers\UserController::class, 'inputfp']);
Route::get('/download', [App\Http\Controllers\UserController::class, 'download']);
/*admin*/
Route::get('/homeadmin', [App\Http\Controllers\AdminController::class, 'index']);
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
