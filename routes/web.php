<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;


Route::get('/',
[
    PagesController::class,
    'index'
]);

Route::get('about', [PagesController::class, 'about']);


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
