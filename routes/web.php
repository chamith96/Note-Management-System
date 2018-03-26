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
//Page routes
Route::get('/', 'PageController@index');

Route::resource('/note','NoteController');

/*
Note routes
Route::get('/note', 'NoteController@index');
Route::get('/note/create', 'NoteController@create');
Route::get('/note/{id}', 'NoteController@show');
Route::get('/note/{id}/edit', 'NoteController@edit');


Note actions
Route::post('/note/create', 'NoteController@store');
Route::post('/note/{id}', 'NoteController@update');
Route::delete('/note/{id}', 'NoteController@destroy');
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
