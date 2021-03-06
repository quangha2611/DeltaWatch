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
Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index')->name('get.home.index');

Route::prefix('products')->group(function () {
    Route::get('index', 'ProductController@index')->name('get.product.index');
    Route::get('show/{id}', 'ProductController@show')->name('get.product.show');
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

    Route::get('login', 'LoginController@index')->name('get.login.index');
    Route::post('login', 'LoginController@login')->name('post.login.login');

    Route::get('logout', 'LogoutController@index')->name('get.logout.index');

    Route::get('signup', 'SignUpController@index')->name('get.sign-up.index');
    Route::post('signup', 'SignUpController@signup')->name('post.sign-up.signup');

    Route::get('cart', 'CartController@index')->middleware('check_customer')->name('get.cart.index');
    Route::get('add-to-cart', 'CartController@addToCart')->name('get.cart.add-to-cart');
    Route::get('reduce-quantity', 'CartController@reduceQuantity')->name('get.cart.reduce-quantity');
    Route::get('delete-from-cart/{id}', 'CartController@deleteFromCart')->name('get.cart.delete-from-cart');
    Route::get('order', 'CartController@order')->name('get.cart.order');

    Route::get('search', 'SearchController@index')->name('get.search.index');

});

Route::prefix('ajax')->group (function() {
    Route::get('brand/{id}', 'HomeController@getAjaxProductsByBrand')->name('get.ajax.brand');
    Route::get('product/{id}', 'ProductController@getAjaxRelatedProduct')->name('get.ajax.product');
} );


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('report', 'ReportController@index')->name('get.admin.report');
});
