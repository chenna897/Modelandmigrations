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
//insert data
/*Route::get('/','MyController@index');
Route::get('/insert','MyController@create');
Route::get('/view-records','MyController@index');
Route::get('/edit-records','MyController@index');
Route::get('/edit/{id}','MyController@show');
Route::post('/edit/{id}','MyController@edit');
Route::get('/delete-records','StudDeleteController@index');
Route::get('/delete/{id}','StudDeleteController@destroy');*/

Route::get('/', 'MyController@index');
Route::get('insert', 'StudInsertController@insertform');
Route::post('create', 'StudInsertController@insert');
Route::get('view-records', 'StudViewController@index');
Route::get('edit-records', 'StudUpdateController@index');
Route::get('edit/{id}', 'StudUpdateController@show');
Route::post('edit/{id}', 'StudUpdateController@edit');
Route::get('delete-records', 'StudDeleteController@index');
Route::get('delete/{id}', 'StudDeleteController@destroy');
