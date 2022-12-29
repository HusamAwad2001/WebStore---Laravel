<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WarehouseController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    $product=Product::where('status','1')->get();
    $category=Category::where('status','1')->get();
    return view('layouts.site',compact('product','category'));
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::redirect('/login', 'login');


Route::group(['/' ,
    'middleware' => 'auth'], function () {

    //////////////group AAdmin ////////
    Route::group(['middleware' => ['AdminMiddleware']], function () {

        ////التصنيف
        Route::resource('category', 'App\Http\Controllers\CategoryController');
////المنتج
        Route::resource('products', 'App\Http\Controllers\ProductController');
////المخازن
        Route::resource('warehouses', 'App\Http\Controllers\WarehouseController');
//////////الطلب
        Route::resource('orders', 'App\Http\Controllers\OrderController');
    });
    //////////////group user ////////
    Route::group(['middleware' => ['UserMiddleware']], function () {

        Route::resource('orders', 'App\Http\Controllers\OrderController')->only(['store']);

        Route::get('myOrder',[\App\Http\Controllers\OrderController::class,'myOrder'])->name('myOrder');
        Route::resource('category', 'App\Http\Controllers\CategoryController')->only(['show']);

    });
});


Route::resource('category', 'App\Http\Controllers\CategoryController')->only(['show']);

