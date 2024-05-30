<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\PromotionController;
use App\Http\Controllers\API\StudentController;
use App\Models\Promotion;
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
Route::get('/student/list',[StudentController::class,'index'])->name('student.list');
Route::post('/student/create',[StudentController::class,'store'])->name('student.create');
Route::get('/student/show/{id}',[StudentController::class,'show'])->name('student.show');
Route::put('/student/update/{id}',[StudentController::class,'update'])->name('student.update');
Route::delete('/student/delete/{id}',[StudentController::class,'destroy'])->name('student.destroy');


Route::get('/category/list',[CategoryController::class,'index'])->name('category.list');
Route::post('/category/create',[CategoryController::class,'store'])->name('category.create');
Route::get('/category/show/{id}',[CategoryController::class,'show'])->name('category.show');
Route::put('/category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::delete('/category/delete/{id}',[CategoryController::class,'destroy'])->name('category.destroy');



Route::get('/product/list',[ProductController::class,'index'])->name('category.list');
Route::post('/product/create',[ProductController::class,'store'])->name('category.create');



// Promotion 
Route::get('/promotion/list',[PromotionController::class,'index'])->name('promotion.list');
Route::post('/promotion/create',[PromotionController::class,'store'])->name('promotion.create');
Route::put('/promotion/update/{id}',[PromotionController::class,'update'])->name('promotion.update');
Route::get('/promotion/show/{id}',[PromotionController::class,'show'])->name('promotion.show');


// Student Ordeer 

Route::get('/order/list',[OrderController::class,'index'])->name('order.list');
Route::post('/order/create',[OrderController::class,'store'])->name('order.create');
