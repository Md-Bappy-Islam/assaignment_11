<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\summeryController;
use App\Http\Controllers\userController;
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

Route::get('/', function () {return view('pages.home');});
Route::get('/summery', [summeryController::class,'TodayTotalSold']);
Route::get('/summery', [summeryController::class,'TodayTotalAmmount']);
Route::get('/products',[productController::class,"getProduct"]);
Route::get('/add_product',[productController::class,"addProduct"]);
Route::post('/add_product',[productController::class,"storeProduct"]);



// Route::get('/q', [userController::class,'userQuery']);

// Route::get('/g', [userController::class,'groupQuery']);


