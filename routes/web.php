<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
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
Route::post('/store-product', [ProductController::class, 'store'])->name('storeProduct');
Route::get('/index-product', [ProductController::class, 'index'])->name('indexProduct');
Route::get('/show-product/{product}', [ProductController::class, 'show'])->name('showProduct');
Route::get('/edit-product/{product}', [ProductController::class, 'edit'])->name('editProduct');
Route::put('/update-product/{product}', [ProductController::class, 'update'])->name('updateProduct');
Route::delete('/delete-product/{product}', [ProductController::class, 'destroy'])->name('deleteProduct');

// rotte sponsor
Route::get('/create-shop', [ShopController::class, 'create'])->name('createShop');
Route::post('/store-shop',[ShopController::class, 'store'])->name('storeShop');
Route::get('/index-shop', [ShopController::class, 'index'])->name('indexShop');
Route::get('/show-shop/{shop}', [ShopController::class, 'show'])->name('showShop');
Route::get('/edit-shop/{shop}', [ShopController::class, 'edit'])->name('editShop');
Route::put('/update-shop/{shop}', [ShopController::class, 'update'])->name('updateShop');
Route::delete('/delete-shop/{shop}', [ShopController::class, 'destroy'])->name('deleteShop');

// rotte profilo utente
Route::get('/user-profile', [HomeController::class, 'userProfile'])->name('userProfile');
