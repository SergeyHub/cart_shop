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

Route::get('/about', function () {
    return view('about');
});
Route::get('/installation', function () {
    return view('installation');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/',     'CartController@shop');
Route::get('/shop', 'CartController@shop')->name('shop');
Route::get('/cart', 'CartController@cart')->name('cart.index');
//................................................................................
Route::post('/add',    'CartController@add'   )->name('cart.store');
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/remove', 'CartController@remove')->name('cart.remove');
Route::post('/clear' , 'CartController@clear' )->name('cart.clear');

