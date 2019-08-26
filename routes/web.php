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
Route::get('/about-us', 'HomeController@aboutUs')->name('about_us');
Route::get('/contact-us', 'HomeController@contactUs')->name('contact_us');
Route::post('/contact-us', 'HomeController@submitContactUs')->name('submit_contact_us');
Route::get('/where-to-buy/{id}', 'HomeController@whereToBuyDetail')->name('where_to_buy_detail');
Route::get('/where-to-buy', 'HomeController@whereToBuy')->name('where_to_buy');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/products/{id}', 'HomeController@productDetail')->name('product_detail');

Route::get('/languages/{locale}', 'HomeController@changeLocalization')->name('locale');
