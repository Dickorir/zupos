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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('/top', function () {
    return view('pos3');
});
Route::resource('users', 'UserController');
Route::get('/deactivate_user/{id}', 'UserController@deactivate_user');
Route::get('/activate_user/{id}', 'UserController@activate_user');

Route::get('/profile','UserController@profile');
Route::get('profile-edit','UserController@profileEdit');
Route::post('/profile-edit','UserController@profileEditPost');
Route::get('/change-password', 'UserController@changePassword');
Route::post('/change-password', 'UserController@changePasswordPost');

Route::get('/pos', 'PosController@index')->name('pos');

Route::get('load/categoryItems/{id}', 'PosController@categoryItems');

Route::get('load/subcategoryItems/{id}', 'PosController@subcategoryItems');

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

Route::get('cart/addItem/{id}', 'CartController@addItem');
Route::get('cart/deleteItem/{id}', 'CartController@deleteItem');
Route::get('cart/updateQty/{id}', 'CartController@updateQty');
Route::get('cart/updateQtyDown/{id}', 'CartController@updateQtyDown');
Route::get('cart/clear', 'CartController@clearCart');
Route::get('cart/hold', 'CartController@holdCart');
Route::get('cart/hold/restore/{id}', 'CartController@holdCartRestore');
Route::get('cart/placeOrder', 'OrdersController@placeOrder');

Route::get('invoice/{id}', 'OrdersController@invoice');

Route::get('contact-info', 'SettingsController@contactinfo');
Route::post('save-settings','SettingsController@update');

Route::resource('table', 'TableController');

Route::resource('kitchen', 'KitchenController');

Route::get('waiting/orders', 'KitchenController@waitOrders');
Route::get('finished/orders', 'KitchenController@finishedOrders');
Route::get('new/orders', 'KitchenController@newOrders');
Route::get('view/orderitems/{id}', 'KitchenController@viewOrderItems');
Route::get('fin/order/{id}', 'KitchenController@finishOrder');
Route::get('prepare/order/{id}', 'KitchenController@prepareOrder');
Route::get('badges/orders', 'KitchenController@badgeOrder');

Route::get('cashier', 'CashierController@index')->name('cashier.index');
Route::get('cashier/orders', 'CashierController@newOrders');
Route::get('cashier/view/orderitems/{id}', 'CashierController@viewOrderItems');
Route::get('cashier/pay/{id}', 'CashierController@Payments');

Route::get('receipt/{id}', 'CashierController@receipt');
Route::get('cashier/badges', 'CashierController@badgeSales');
Route::get('cashier/sales', 'CashierController@salesToday');

// Report Routes
Route::get('report/sales', 'ReportController@sales');
Route::post('report/datesales', 'ReportController@datesales');

Route::get('downloadExcel/{type}/{from}/{to}', 'ReportController@downloadExcel');