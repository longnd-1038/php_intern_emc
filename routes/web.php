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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/products/viewed', 'ProductController@viewed')->name('products.viewed');

Route::resource('products', 'ProductController');
Route::get('products/{id}', 'ProductController@show')->name('products.show_detail');

Route::resource('/cart', 'CartController')->except(['create', 'show', 'edit']);

Route::resource('/account', 'AccountController')->only(['index', 'update']);

Route::put('/account', 'AccountController@updatePass')->name('account.updatePass');

Route::get('/order', 'OrderController@index')->name('order.index');

Route::post('/order', 'OrderController@guestOrder')->name('order.guestOrder');

Route::get('/order/{id}', 'OrderController@show');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('/statistical', 'AdminController@getStatistical');
    Route::post('/', 'ProductController@importProduct')->name('products.import');
    Route::resource('products', 'ProductController');
    Route::resource('requestproducts', 'RequestProductController')->except(['create', 'edit']);
    Route::resource('orders', 'OrderController')->except(['create', 'store']);
    Route::post('createproducts', 'RequestProductController@createProductFromRequest')->name('request.create_product');
    Route::resource('categories', 'CategoryController');
    Route::resource('users', 'UserController');
    Route::get('/users/order/{id}', 'UserController@order')->name('users.order');
    Route::get('/charts', 'AdminController@getCharts');
});
Route::post('createproducts', 'Admin\RequestProductController@createProductFromRequest')->name('request.create_product');
Route::get('filter/products', 'ShopController@filterProduct')->name('product.filter');
Route::get('shop', 'ShopController@index');
Route::post('products/{id}/reviews', 'ProductController@reviewProduct')->name('products.review');
Route::get('comments/{id}', 'ProductController@getComments')->name('comments.index');
Route::get('/markallnotifications', 'System\NotificationController@markAllRead')->name('noti.mark_all');
Route::delete('/deletenotifications', 'System\NotificationController@deleteAllNotificationByUser')->name('noti.delete_all');
Route::get('shop', 'ShopController@index')->name('shop.index');


Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');
