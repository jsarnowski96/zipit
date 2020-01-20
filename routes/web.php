<?php

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
    return view('welcome');
});

Route::get('cart', function() {
    return view('cart/cart');
})->name('cart');

Route::get('products', function() {
    return view('cart/products');
})->name('products');

Route::get('dedicated_servers', function() {
    $dedicated_servers = DB::table('dedicated_servers')->get();
    return view('cart/products', ['dedicated_servers' => $dedicated_servers]);
})->name('dedicated_servers');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
