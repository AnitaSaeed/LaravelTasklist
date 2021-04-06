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

Route::post('store','TaskController@store');
Route::get('create','TaskController@create');
Route::get('tasks-list','TaskController@task_list');
Route::get('edit','TaskController@edit');
Route::post('update','TaskController@update');
Route::post('delete','TaskController@delete');
route::get('category_create','CategoryController@create');
route::post('category_store','CategoryController@store');
route::get('category_list','CategoryController@index');
route::get('category_edit/{id}','CategoryController@edit');
route::post('category_update/{id}','CategoryController@update');
route::post('category_delete/{id}','CategoryController@destroy');
Route::get('/', function () {
    return view('welcome2');
});
