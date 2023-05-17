<?php

use App\Http\Controllers\Contact;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowImagesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/products',[ProductController::class,'index']);
Route::get('/list-product',[ProductController::class,'getList']);
Route::get('/contact',[Contact::class,'index']);
Route::post('/contact',[Contact::class,'store']);
Route::get('/gallery',[ShowImagesController::class,'index']);