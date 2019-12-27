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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/products/edit/{id}', 'ProductsController@edit')->name('edit-product');
Route::get('/products/create', 'ProductsController@create')->name('create-product');
Route::post("/products/store", "ProductsController@store")->name('store-product');
Route::put("/products/update/{id}", "ProductsController@update")->name('update-product');
Route::delete("/products/delete/{id}", "ProductsController@destroy")->name('delete-product');

Route::get('/changelog', 'ChangelogController@index')->name('changelog');
