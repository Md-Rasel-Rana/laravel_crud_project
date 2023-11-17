<?php

use App\Http\Controllers\productController;
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

Route::get('/product',[productController::class,'index'])->name('product.index');
Route::get('/product/create',[productController::class,'create'])->name('product.create');
Route::post('/product/store',[productController::class,'store'])->name('product.store');
Route::get('/product/show/{product}',[productController::class,'show'])->name('product.show');
Route::get('/product/{product}/edit',[productController::class,'edit'])->name('product.edit');
Route::put('/product/{product}',[productController::class,'update'])->name('product.update');
Route::delete('/product/{product}',[productController::class,'destroy'])->name('product.destroy');