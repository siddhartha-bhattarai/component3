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

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/index', function () {
        return view('admin.index');
    });

Route::get('/rolereg', 'Admin\DashboardController@registered');

Route::get('/user-edit/{id}', 'Admin\DashboardController@registeredit');

Route::put('/profile-update/{id}','Admin\DashboardController@profileupdate');

Route::delete('/user-delete/{id}','Admin\DashboardController@profiledelete');

Route::get('/product-edit','Product\ProductController@registered');   

Route::get('/productedit/{id}', 'Product\ProductController@registeredit');

Route::put('/product-update/{id}', 'Product\ProductController@productupdate');

Route::delete('/product-delete/{id}','Product\ProductController@productdelete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/product', 'AdminController@show')->name('admin');

Route::get('/product-create', 'Product\ProductController@productcreate');

Route::put('/product-create','Product\ProductController@store');

Route::get('/product/index','Product\ProductController@index');

Route::get('/product/select/{id}','UserController@show');

Auth::routes();



