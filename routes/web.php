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

Route::get('/', function () {
    return view('home');
});

Route::view('/slide-us', 'slide');
Route::view('/shop.html', 'shop');
Route::view('/product.html', 'product');
Route::view('/account-wishlist.html', 'account-wishlist');
Route::view('/account-orders.html', 'account-orders');
Route::view('/account-order.html', 'account-order');
Route::view('/account-personal-info.html', 'account-personal-info');
Route::view('/account-address.html', 'account-address');
Route::view('/account-payment.html', 'account-payment');
Route::view('/account-payment-edit.html', 'account-payment-edit');