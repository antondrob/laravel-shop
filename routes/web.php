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
Route::get('/shop/category/{slug?}', 'ShopController@category')->name('category');
Route::get('/shop/product/{slug?}', 'ShopController@product')->name('product');
Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']],function(){
    Route::get('/','DashboardController@dashboard')->name('admin.index');
    Route::resource('/category','CategoryController',['as' => 'admin']);
    Route::resource('/product','ProductController',['as' => 'admin']);
});
Route::get('/', function () {
    return view('shop.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
