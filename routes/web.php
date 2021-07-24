<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/products', [ProductController::class,'index']);
Route::get('/products/about', [ProductController::class,'about']);

Route::get('/products','App\Http\Controllers\ProductController@index');