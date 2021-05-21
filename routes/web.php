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

Auth::routes();
//Item Routes
Route::get('/item', 'ItemController@index')->name('all.item');



Route::group(['middleware'=>['cashier']],function(){

    Route::get('/item/edit/{id}', 'ItemController@edit')->name('item.edit');
    Route::get('/item/update', 'ItemController@update')->name('item.update');
    Route::get('/item/delete/{id}', 'ItemController@delete')->name('item.delete');
});
Route::group(['middleware'=>['owner']],function(){
    //Item Routes

    Route::get('/item/create', 'ItemController@create')->name('item.create');
    Route::post('/item/store', 'ItemController@store')->name('item.store');

    //Customer Routes
    Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
    Route::post('/customer/store', 'CustomerController@store')->name('customer.store');
});

//Customer Routes
Route::get('/customer', 'CustomerController@index')->name('all.customer');


Route::group(['middleware'=>['manager']],function(){
    Route::get('/customer/edit/{id}', 'CustomerController@edit')->name('customer.edit');
    Route::get('/customer/update/{id}', 'CustomerController@update')->name('customer.update');
    Route::get('/customer/delete/{id}', 'CustomerController@delete')->name('customer.delete');
});


