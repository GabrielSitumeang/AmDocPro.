<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginCotroller;
use App\Http\Controllers\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/presensi',[AllController::class,'make4']);
Route::get('/info',[AllController::class,'make1']);
Route::get('/prodi',[AllController::class,'make5']);
Route::get('/upload',[AllController::class,'make6']);
Route::get('/review',[AllController::class,'make7']);
Route::get('/',[AllController::class,'make']);
Route::get('/prodi_d3ti',[AllController::class,'make2']);
Route::get('/silabus',[AllController::class,'make3']);


Route::get('/registrasi',[RegisterController::class, 'register'])->middleware('guest');
Route::post('/registrasi',[RegisterController::class, 'store']);

Route::get('/login', [LoginCotroller:: class, 'login1'])->name('login')->middleware('guest');
Route::post('/login', [LoginCotroller:: class, 'authenticate']);
Route::post('/logout',[LoginCotroller::class, 'logout']);

Route::get('/dashboard', [DashboardController:: class, 'index'])->middleware('auth');