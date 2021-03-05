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
    Route::get('index', 'ProductController@index')->name('get.product.index');
});

Route::prefix('news')->group(function () {
    Route::get('index', 'NewsController@index')->name('get.news.index');
});

Route::prefix('about-us')->group(function () {
    Route::get('index', 'AboutUsController@index')->name('get.about-us.index');
});

Route::prefix('address')->group(function () {
    Route::get('index', 'AddressController@index')->name('get.address.index');
});
