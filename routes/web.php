<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

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

Route::get('/', [HomeController::class,'index'])->name('dashboard');

Route::prefix('/admin')->group(function () {
    Route::get('/', [ProductController::class,'index'])->name('product');
    Route::post('/store', [ProductController::class,'store'])->name('product.store');
    Route::get('/{item_id}/delete', [ProductController::class,'delete'])->name('product.delete');
    Route::get('/{item_id}/status', [ProductController::class,'status'])->name('product.status');

    Route::post('/{item_id}/update', [ProductController::class,'update'])->name('product.update');
    Route::get('/edit', [ProductController::class,'edit'])->name('product.edit');
    Route::get('/new', [ProductController::class,'new'])->name('product.new');
});

Route::prefix('/customer')->group(function () {
    Route::get('/', [CustomerController::class,'index'])->name('customer');
});
