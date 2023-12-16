<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PerusahaanController;

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
    return view('login');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('tampilan');
});



Route::post('/auth',[UserController::class,'auth']);
Route::get('login',[UserController::class,'show']);
Route::post('dashboard',[UserController::class,'view']);
Route::post('dashboardalumni',[UserController::class,'alumni']);

Route::post('/alumni',[AlumniController::class,'alumni']);
Route::post('/login/alumni',[AlumniController::class,'show']);
// Route::post('dashboardalumni',[AlumniController::cl2ass,'view']);
Route::get('register',[AlumniController::class,'register']);
Route::post('register/daftar',[AlumniController::class,'daftar']);


Route::get('/posting',[PostingController::class,'view']);
Route::post('/posting/post',[PostingController::class,'post']);
Route::get('/viewposting',[PostingController::class,'posting']);
Route::get('/postinghapus/{id}',[PostingController::class,'destroy']);
Route::get('/posting/edit/{id}',[PostingController::class,'edit']);
Route::post('/posting/update/{id}',[PostingController::class,'update']);
Route::get('posting/add',[PostingController::class,'add']);
Route::post('posting/create',[PostingController::class,'create']);

Route::get('/pengajuan',[PengajuanController::class,'view']);
Route::post('/pengajuan/post',[PengajuanController::class,'post']);
Route::get('/viewpengajuan',[PengajuanController::class,'pengajuan']);
Route::get('/pengajuanhapus/{id}',[PengajuanController::class,'destroy']);
Route::get('/pengajuan/edit/{id}',[PengajuanController::class,'edit']);
Route::post('/pengajuan/update/{id}',[PengajuanController::class,'update']);
Route::get('pengajuan/add',[PengajuanController::class,'add']);
Route::post('pengajuan/create',[PengajuanController::class,'create']);

Route::get('/perusahan',[PerusahaanController::class,'view']);
Route::post('/perusahaan/post',[PerusahaanController::class,'post']);
Route::get('/viewperusahaan',[PerusahaanController::class,'perusahaan']);
Route::get('/perusahaanhapus/{id}',[PerusahaanController::class,'destroy']);
Route::get('/perusahaan/edit/{id}',[PerusahaanController::class,'edit']);
Route::post('/perusahaan/update/{id}',[PerusahaanController::class,'update']);
Route::get('perusahaan/add',[PerusahaanController::class,'add']);
Route::post('perusahaan/create',[PerusahaanController::class,'create']);
