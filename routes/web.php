<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "App\Http\Controllers\HomeController@index")->name("home.index");
Route::get("/about", "App\Http\Controllers\HomeController@about")->name("home.about");
Route::get("/products", "App\Http\Controllers\productsController@index")->name("home.products");
Route::get('/products/{id}', 'App\Http\Controllers\ProductsController@show')->name("home.product");