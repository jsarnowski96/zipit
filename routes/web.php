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
})->name('welcome');

Route::get('cart', function() {
    return view('cart/cart');
})->name('cart');

Route::get('products', function() {
    return view('cart/products');
})->name('products');

Route::get('dedicated_servers', function() {
    $products = DB::select('select * from products where product_category_id = 1');
    return view('cart/products', ['products' => $products]);
})->name('dedicated_servers');

Route::get('root_servers', function() {
    $products = DB::select('select * from products where product_category_id = 2');
    return view('cart/products', ['products' => $products]);
})->name('root_servers');

Route::get('contact', 'ContactFormController@index')->name('contact');
Route::post('contact', ['as' => 'contact_form_messages', 'uses' => 'ContactFormController@SendFormData']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
