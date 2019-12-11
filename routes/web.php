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

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/{categorySlug}', 'CategoryController@index')->name('category');
Route::get('/{categorySlug}/{productSlug}', 'ProductController@index')->name('product');


