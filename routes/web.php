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



Route::get('/','logincontroller@index');
ROute::post('/','logincontroller@verify');
Route::get('/login','logincontroller@index');
ROute::post('/login','logincontroller@verify');
Route::get('/admin', 'admincontroller@index')->name('admin.adminpanel');
Route::get('/customer', 'customercontroller@index')->name('customer.home');
Route::get('/logout', 'logincontroller@logout')->name('logout.logout');
Route::get('/viewdata', 'admincontroller@viewdata')->name('admin.viewdata');
Route::get('/addpost', 'admincontroller@addpost')->name('admin.addpost');
Route::post('/addpost', 'admincontroller@submitdata');
Route::get('/edit/{id}', 'admincontroller@edit')->name('admin.edit');
Route::post('/edit/{id}', 'admincontroller@update');
Route::get('/delete/{id}', 'admincontroller@delete')->name('admin.delete');
Route::post('/delete/{id}', 'admincontroller@destroy');



