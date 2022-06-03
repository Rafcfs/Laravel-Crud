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

Route::get('/', ['uses'=>'App\Http\Controllers\BasicController@index']);
Route::get('/insert',['uses'=>'App\Http\Controllers\BasicController@create']);
Route::post('/save',['uses'=>'App\Http\Controllers\BasicController@save']);
Route::get('/edit/{id}',['as'=>'edit', 'uses'=>'App\Http\Controllers\BasicController@edit']);
Route::put('/update/{$id}',['as'=>'update','uses'=>'App\Http\Controllers\BasicController@update']);
Route::get('/delete/{$id}',['as'=>'update','uses'=>'App\Http\Controllers\BasicController@destroy']);