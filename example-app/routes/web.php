<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Admin;

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

Route::get('/', [User\HomeController::class,'index']);
Route::prefix('Admin')->group(function () {

    Route::get('/', [Admin\HomeController::class,'index']);
    Route::get('/add-product', [Admin\ProductController::class,'addProduct'])->name('add-product');
    Route::post('/add-product', [Admin\ProductController::class,'create']);
    Route::get('/update-product/{id}', [Admin\ProductController::class,'updateProduct'])->name('update-product');
    Route::post('/update-product/{id}', [Admin\ProductController::class,'update']);
    Route::get('/list-products', [Admin\ProductController::class,'listProduct']);
    Route::get('/list-order', [Admin\OrderController::class,'listOrder']);
    Route::get('/list-customer', [Admin\CustomerCotroller::class,'listCustomer']);
    Route::get('/details-product/{id}', [Admin\ProductController::class,'detailsProduct']);
    Route::get('/list-categories', [Admin\CategoryController::class,'listCategories']);
    Route::get('/add-category', [Admin\CategoryController::class,'addCategory']);
    Route::delete('/delete-product/{id}',[Admin\ProductController::class,'deleteProduct']);
    Route::get('/getAllProduct',[Admin\ProductController::class,'getAllProduct']);
    
});
Route::get('/filter_price/{id}/{maxprice}/{minprice}',[User\ProductController::class,'filter_price']);
Route::get('/getproductbycategory/{name}/{sort}',[User\ProductController::class,'getProductbyCategory']);
Route::get('/shop-grid', [User\ShopGridController::class,'ShopGrid']);
Route::get('/add-cart/{id}', [User\CartController::class,'AddCart']);
Route::get('/cart', [User\CartController::class,'cart'])->name('cart');
Route::post('/update', [User\CartController::class,'update'])->name('update');
Route::delete('/delete', [User\CartController::class,'remove']);



