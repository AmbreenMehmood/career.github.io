<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});
// Route::get('user',[UserController::class,'index']);

Route::get('/admin',[DashboardController::class,'index']);
Route::get('/career',[DashboardController::class,'career']);
Route::get('/about-us',[DashboardController::class,'about']);
Route::get('/layout',[DashboardController::class,'layout']);