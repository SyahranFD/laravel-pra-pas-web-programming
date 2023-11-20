<?php

use App\Http\Controllers\BahansController;
use App\Http\Controllers\KaryawansController;
use App\Http\Controllers\RestaurantsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/karyawan/all', [KaryawansController::class,'index']);
Route::get('/karyawan/detail/{karyawan}', [KaryawansController::class,'show']);

Route::get('/restaurant/all', [RestaurantsController::class,'index']);
Route::get('/restaurant/detail/{restaurant}', [RestaurantsController::class,'show']);

Route::get('/bahan/all', [BahansController::class,'index']);
Route::get('/bahan/detail/{bahan}', [BahansController::class,'show']);
