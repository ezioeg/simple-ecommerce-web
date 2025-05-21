<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;

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

// Auth
Auth::routes();

Route::get('home',  [HomeController::class, 'index'])->name('home');
Route::get('logout', [LoginController::class, 'logout']);

// Admin product list
Route::get('products', [ProductController::class, 'index'])->name('product.index');
// Route::get('products','ProductController@index')->name('product.index');

// Admin crud of products
Route::get('create-product', [ProductController::class, 'create'])->name('product.create'); 
Route::post('store', [ProductController::class, 'store'])->name('product.store');  
Route::get('edit-product/{id}',[ProductController::class, 'edit']);  
Route::post('update-product/{id}',[ProductController::class, 'update']);  
Route::get('delete-product/{id}',[ProductController::class, 'delete']);

// Customer menu
Route::get('menu',[MenuController::class, 'index'])->name('menu.index');

//Favourite
Route::get('favourites',[ProductController::class, 'favouriteIndex'])->name('favourite.index');
Route::get('add-favourite/{id}',[ProductController::class, 'addToFavourite']);  
Route::get('delete-favourite/{id}',[ProductController::class, 'deleteFromFavourite']);  

// Customer basket
Route::get('basket', [ProductController::class, 'basketIndex'])->name('basket.index'); 
Route::get('add-basket/{id}',[ProductController::class, 'addToBasket']);  
Route::get('delete-basket/{id}',[ProductController::class, 'deleteFromBasket']);

// Customer checkout
Route::get('checkout',[CheckoutController::class, 'index'])->name('checkout.index');  
Route::post('checkout-store',[CheckoutController::class, 'store'])->name('checkout.store');

// Customer contact
Route::get('contact-us',[ContactController::class, 'index'])->name('contact.index');
Route::post('contact-store',[ContactController::class, 'store'])->name('contact.store'); 
