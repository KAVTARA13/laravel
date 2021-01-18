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

Route::get('/',"ProductController@index")->name("index");
Route::get('/single/{id}',"ProductController@single")->name("name");

Route::get('/product',"ProductController@product")->name("product");
Route::post('/comments',"ProductController@comment")->name("comment");

Route::get('/admin',"ProductController@adminIndex")->name("admin");
Route::post('/admin/store',"ProductController@adminStore")->name("adminstore");
Route::post('/admin/delete',"ProductController@delete")->name("admindelete");
Route::get('/admin/edit/{id}',"ProductController@edit")->name("adminedit");
Route::post('/admin/update',"ProductController@update")->name("adminupdate");

Auth::routes(["verify"=>true]);

Route::get('/home', 'HomeController@index')->name('home');
