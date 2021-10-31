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

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
Route::name('product.')
      ->group(function () {
          Route::get('/', 'ProductController@index')->name('index');
          Route::get('/product/{id}', 'ProductController@show')->name('show');
      });

Route::get('/create','ProductController@create');
Route::post('/books','ProductController@store');

Route::post('/cart/create','CartController@store')->name('cart.create');
Route::get('/cart','CartController@index')->name('cart.index');
Route::get('/cart/checktout','CartController@checkout')->name('cart.checkout');
Route::delete('/cart/{cart}','CartController@destroy')->name('cart.destroy');
