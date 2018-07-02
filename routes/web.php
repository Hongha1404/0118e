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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/category','Admin\\CategoryController@index');
//them
Route::get('admin/category/add','Admin\\CategoryController@create');
Route::post('admin/category/add','Admin\\CategoryController@store');
//sua
Route::get('admin/category/{id}/edit','Admin\\CategoryController@edit');
//update
Route::post('admin/category/{id}', 'Admin\CategoryController@update');
//xoa
Route::post('admin/category/{id}/destroy', 'Admin\CategoryController@destroy');