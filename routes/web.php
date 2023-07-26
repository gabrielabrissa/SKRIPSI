<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AturPemberitahuanController;
use App\Http\Controllers\AturLimitController;
use App\Http\Controllers\AturUserController;
use App\Http\Controllers\DataTTFController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\InputTTFController;
use App\Http\Controllers\KuotaHarianSupController;
use App\Http\Controllers\LaporanTTFController;
use App\Http\Controllers\MonitoringFileController;


// Route::get('/index2', function () {return view('welcome');});
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

/*user*/
Route::group(['middleware' => ['supplier']], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/home/jk', [HomeController::class, 'downloadJK']);
    Route::get('/inputttf', [InputTTFController::class, 'inputttf'])->name('barcode.generate');
    Route::get('/fetch-ttf', [InputTTFController::class, 'fetchTTF']);
    Route::get('/fetch-cabang', [InputTTFController::class, 'fetchCabang']);
    Route::get('/addttf/{id1}', [InputTTFController::class, 'addttf']);
    Route::get('/tambahfp/{id1}', [InputTTFController::class, 'tambahfp']);
    // Route::get('/download', [DownloadController::class, 'download']);
    

    Route::get('/get-ttf-data-bpb/{id}', [InputTTFController::class, 'getTtfDataBpb']);
    Route::get('/get-sys-supp-site/{id}', [InputTTFController::class, 'getSysSuppSite']);
    Route::get('/get-ttf-data-nofp/{id}', [InputTTFController::class, 'getTtfDataNoFP']);
    Route::get('/get-detail-fp/{id}', [InputTTFController::class, 'getDetailFP']);
    Route::post('/read_qr', [InputTTFController::class, 'read_qr'])->name('read_qr');
    Route::post('/create-ttf', [InputTTFController::class, 'createTtf']);
    Route::post('/update-fp-bpb', [InputTTFController::class, 'updateFpBpb']);
    Route::get('/inputttf/submitttf/{id}', [InputTTFController::class, 'submitTTF']);
    Route::get('/inputttf/deletettf/{id}', [InputTTFController::class, 'deleteTTF']);
    Route::get('/inputttf/cetakttf/{id1}', [InputTTFController::class, 'cetakTTF']);

});

/*admin*/
Route::group(['middleware' => ['admin']], function () {
    Route::get('/homeadmin', [HomeController::class, 'indexadmin']);
    Route::get('/homeadmin/jk', [HomeController::class, 'downloadJK']);
    Route::get('/aturuser', [AturUserController::class, 'aturuser']);
    Route::get('/aturuser/adduser', [AturUserController::class, 'adduser']);
    Route::get('/get-Sys-Supp', [AturUserController::class, 'getSysSupp']);
    Route::get('/laporanttf', [LaporanTTFController::class, 'laporanttf']);
    Route::get('/aturpemberitahuan', [AturPemberitahuanController::class, 'aturpemberitahuan']);
    Route::post('/aturpemberitahuan/save_pemberitahuan', [AturPemberitahuanController::class, 'save_pemberitahuan']);
    Route::get('/aturpemberitahuan/delete_pemberitahuan/{id1}', [AturPemberitahuanController::class, 'delete_pemberitahuan']);
    Route::get('/datasup', [DataTTFController::class, 'datasup']);
    Route::post('/create-user', [AturUserController::class, 'createUser']);
    // Route::get('/fetch-user', [InputTTFController::class, 'fetchUser']);
    // Route::get('/aturlimit', [AturLimitController::class, 'aturlimit']);
    // Route::get('/datattf', [DataTTFController::class, 'datattf']);
    // Route::get('/datalampfp', [DataTTFController::class, 'datalampfp']);
    // Route::get('/kuotaharian', [KuotaHarianSupController::class, 'kuotaharian']);
    // Route::get('/monitoringfp', [MonitoringFileController::class, 'monitoringfp']);
    // Route::get('/downloadadmin', [DownloadController::class, 'downloadadmin']);
});

