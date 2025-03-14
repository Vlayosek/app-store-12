<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
