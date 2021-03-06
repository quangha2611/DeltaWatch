<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('get.home.index');

Route::prefix('products')->group(function () {
    Route::get('/index', 'ProductController@index')->name('get.product.index');
    Route::get('/detail', 'ProductDetailController@index')->name('get.product.detail.index');
});

Route::get('/login', 'LoginController@index')->name('get.login.index');
Route::get('/signup', 'SignUpController@index')->name('get.sign.up.index');
Route::get('/cart', 'CartController@index')->name('get.cart.index');


