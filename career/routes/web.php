<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CvController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin',[DashboardController::class,'index']);
Route::get('/career',[DashboardController::class,'career']);
Route::get('/career2',[DashboardController::class,'career2']);

Route::get('/about-us',[DashboardController::class,'about']);
Route::get('/layout',[DashboardController::class,'layout']);
Route::get('/index',[DashboardController::class,'index2']);

Route::get('/contact',[DashboardController::class,'contact']);
Route::get('/sdp',[DashboardController::class,'sdp']);

Route::get('/sd',[DashboardController::class,'sd']);
Route::get('/msd',[DashboardController::class,'msd']);
Route::get('/fsd',[DashboardController::class,'fsd']);

Route::get('/ab',[CvController::class,'showUploadForm']);
Route::post('/cv-upload',[CvController::class,'uploadcv'])->name('upload_cv');




