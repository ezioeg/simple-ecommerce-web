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

Route::get('/menu', function () {
    return view('product.menu');
});

Route::get('/product-list', function () {
    return view('product.index');
});

Route::get('/create-product', function () {
    return view('product.create');
});

Route::get('/edit-product', function () {
    return view('product.edit');
});

Route::get('/basket', function () {
    return view('basket.index');
});

Route::get('/checkout', function () {
    return view('checkout.index');
});

Route::get('/contact-us', function () {
    return view('contact.index');
});

// Auth::routes();

//Product
// Route::get('products','ProductController@index')->name('product.index');