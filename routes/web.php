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
Route::get('/top', function () {
    return view('pos3');
});
Route::get('/pos', 'PosController@index')->name('pos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category', 'CategoryController');
Route::post('/storeCategory', 'CategoryController@store' );
Route::get('/getCategory', 'CategoryController@getCategory' );
Route::post('/deleteCategory/{id}', 'CategoryController@destroy' );

Route::resource('sub_category', 'SubCategoryController');
Route::get('/getSubCategories', 'SubCategoryController@getSubCategory');
Route::post('/storeSubCategory', 'SubCategoryController@store' );
Route::post('/deleteSubCategory/{id}', 'SubCategoryController@destroy' );

Route::resource('product', 'ProductController');
Route::post('/formProdSubmit', 'ProductController@store' );
Route::get('/getCategs', 'ProductController@getCategs' );
Route::get('/getSubCategs/{id}', 'ProductController@getSubCategory');
Route::get('/displayProducts', 'ProductController@displayProducts');

Route::post('/formCategSubmit', 'CategoryController@store' );
Route::resource('product_variant', 'ProductVariantController');

Route::post('/storeItem', 'HomeController@storeItem' );

Route::get('/getItems', 'HomeController@getItems' );

Route::post('/deleteItem/{id}', 'HomeController@deleteItem' );

Route::post('/editItem/{id}', 'HomeController@editItem' );
