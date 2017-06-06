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

Route::group(['prefix' => 'tasks', 'as' => 'tasks.'], function() {
  Route::get('',             ['as' => 'index',   'uses' => 'TaskController@index']);
  Route::get('create',       ['as' => 'create',  'uses' => 'TaskController@create']);
  Route::post('store',       ['as' => 'store',   'uses' => 'TaskController@store']);
  Route::get('show/{id}',    ['as' => 'show',    'uses' => 'TaskController@show']);
  Route::get('edit/{id}',    ['as' => 'edit',    'uses' => 'TaskController@edit']);
  Route::post('update/{id}', ['as' => 'update',  'uses' => 'TaskController@update']);
  Route::get('delete/{id}',  ['as' => 'delete',  'uses' => 'TaskController@delete']);
  Route::post('destroy/{id}',['as' => 'destroy', 'uses' => 'TaskController@destroy']);
});
Route::group(['prefix' => 'tickets', 'as' => 'tickets.'], function() {
  Route::get('',             ['as' => 'index',   'uses' => 'TicketController@index']);
  Route::get('create',       ['as' => 'create',  'uses' => 'TicketController@create']);
  Route::post('store',       ['as' => 'store',   'uses' => 'TicketController@store']);
  Route::get('show/{id}',    ['as' => 'show',    'uses' => 'TicketController@show']);
  Route::get('edit/{id}',    ['as' => 'edit',    'uses' => 'TicketController@edit']);
  Route::post('update/{id}', ['as' => 'update',  'uses' => 'TicketController@update']);
  Route::get('delete/{id}',  ['as' => 'delete',  'uses' => 'TicketController@delete']);
  Route::post('destroy/{id}',['as' => 'destroy', 'uses' => 'TicketController@destroy']);
});
