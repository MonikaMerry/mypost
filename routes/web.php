<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AdminController::class,'dashboard']);



// Blog Section

// category section
Route::group(['prefix' => 'category'], function () {

      Route::resource('category',CategoryController::class);

});

// post section
Route::group(['prefix' => 'post'], function () {

    Route::resource('post',PostController::class);

});

// user section
Route::group(['prefix' => 'user'], function () {

    Route::get('user-page',[UserController::class,'userPage']);
    Route::get('show-post/{id}',[UserController::class,'showPost']);
    Route::get('single-post/{id}',[UserController::class,'singlePost']);

});

// Blog section ends.... //

// ProductCategory Starts.... //

Route::group(['prefix' => 'productcategory'],function (){
    Route::resource('category',ProductCategoryController::class);
});

// product section
Route::group(['prefix' => 'product'],function (){
    Route::resource('product',ProductController::class);
});
