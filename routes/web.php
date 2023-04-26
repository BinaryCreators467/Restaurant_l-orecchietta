<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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


// rotta welcome
Route::get('/', [HomeController::class, 'home'])->name('home');





// rotta prodotti
Route::get('/create-product', [ProductController::class, 'create'])->name('createProduct');
Route::get('/index-product', [ProductController::class, 'index'])->name('indexProduct');

Route::post('/store-product', [ProductController::class, 'store'])->name('storeProduct');


