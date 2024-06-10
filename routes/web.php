<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FoodsController;
use App\Http\Controllers\UsersController;

Route::get('/',
[
    PagesController::class,
    'index'
]);

Route::get('/about', [PagesController::class, 'about']);
Route::get('/posts', [PostController::class, 'index']);
Route::resource('/foods', FoodsController::class);
Route::resource('/users', UsersController::class);

Route::get('products',
[
    ProductsController::class,
    'products'
]);

Route::get('products/{productName}/{id}',
[
    ProductsController::class,
    'details'
]) -> where([
    'productName' => '[a-zA-Z0-9]+',
    'id' => '[0-9]+'
]);

Route::get('about',
[
    ProductsController::class,
    'about'
]);
