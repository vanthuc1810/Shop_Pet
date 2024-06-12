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
]) ->name('index');

Route::get('/about', [PagesController::class, 'about']);
Route::get('/posts', [PostController::class, 'index']);
Route::resource('/foods', FoodsController::class);
Route::get('/login', [UsersController::class, 'index']) -> name('login');
Route::get('/logout', [UsersController::class, 'logout']) -> name('logout');

Route::post('/login', [UsersController::class, 'login']);

Route::get('/create', [UsersController::class, 'create']) -> name('create');
Route::post('/create', [UsersController::class, 'postCreate']);


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
