<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::profix('users')->group(function(){
    Route::get('/',[UserController::class],'index');
    Route::post('/',[UserController::class],'store');
    Route::get('/{id}',[UserController::class],'show');
    Route::put('/{id}',[UserController::class],'update');
    Route::delete('/{id}',[UserController::class],'destroy');
});

Route::profix('categories')->group(function(){
    Route::get('/',[CategoryController::class],'index');
    Route::post('/',[CategoryController::class],'store');
    Route::get('/{id}',[CategoryController::class],'show');
    Route::put('/{id}',[CategoryController::class],'update');
    Route::delete('/{id}',[CategoryController::class],'destroy');
});

Route::profix('products')->group(function(){
    Route::get('/',[ProductController::class],'index');
    Route::post('/',[ProductController::class],'store');
    Route::get('/{id}',[ProductController::class],'show');
    Route::put('/{id}',[ProductController::class],'update');
    Route::delete('/{id}',[ProductController::class],'destroy');
});
