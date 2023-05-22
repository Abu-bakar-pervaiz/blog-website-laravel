<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WebsiteController;
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

Route::get('/',[WebsiteController::class,'index']);
Route::get('/about-us/{name?}',[WebsiteController::class,'about']);
Route::get('/admin-test',[WebsiteController::class,'test']);

Route::get('category',[CategoryController::class,'index']);
Route::get('category/add',[CategoryController::class,'add']);
Route::post('category/store',[CategoryController::class,'store']);
Route::get('category/delete/{id}',[CategoryController::class,'delete']);
Route::get('category/edit/{id}',[CategoryController::class,'edit']);
Route::post('category/update',[CategoryController::class,'update']);