<?php

namespace App\Http\Controllers\ProductController;
namespace App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('main');
});

// Route::get('/menu', function () {
//     return view('product.menu');
// });
// Route::get('/products', function () {
//     return view('product.index');
// });
// Route::get('/create-product', function () {
//     return view('product.create');
// });
// Route::get('/edit-product', function () {
//     return view('product.edit');
// });
// Route::get('/basket', function () {
//     return view('basket.index');
// });
// Route::get('/checkout', function () {
//     return view('checkout.index');
// });
// Route::get('/contact-us', function () {
//     return view('contact.index');
// });

// Auth
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

// Admin product list
Route::get('products','App\Http\Controllers\ProductController@index')->name('product.index');
// Admin crud of products
Route::get('create-product','App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('store','App\Http\Controllers\ProductController@store')->name('product.store');
Route::get('edit-product/{id}','App\Http\Controllers\ProductController@edit');
Route::post('update-product/{id}','App\Http\Controllers\ProductController@update');
Route::get('delete-product/{id}','App\Http\Controllers\ProductController@delete');

// Customer menu
Route::get('menu','App\Http\Controllers\MenuController@index')->name('menu.index');

//Favourite
Route::get('favourites','App\Http\Controllers\ProductController@favouriteIndex')->name('favourite.index');
Route::get('add-favourite/{id}','App\Http\Controllers\ProductController@addToFavourite');
Route::get('delete-favourite/{id}','App\Http\Controllers\ProductController@deleteFromFavourite');

// Customer basket
Route::get('basket','App\Http\Controllers\ProductController@basketIndex')->name('basket.index');
Route::get('add-basket/{id}','App\Http\Controllers\ProductController@addToBasket');
Route::get('delete-basket/{id}','App\Http\Controllers\ProductController@deleteFromBasket');

// Customer checkout
Route::get('checkout','App\Http\Controllers\ProductController@checkoutIndex')->name('checkout.index');
Route::post('checkout-store','App\Http\Controllers\ProductController@checkoutStore')->name('checkout.store');

// Customer contact
Route::get('contact-us','App\Http\Controllers\ContactController@index')->name('contact.index');
Route::post('contact-store','App\Http\Controllers\ContactController@store')->name('contact.store');
