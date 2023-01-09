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

Route::group(['middleware'=>'web'], function(){
    Route::get('/','App\Http\Controllers\HomeController@index');
    Auth::routes();
    Route::get('/home', 'App\Http\Controllers\HomeController@index');
});

Route::get('/usuarios', 'App\Http\Controllers\UsuariosController@index')->middleware('auth');
Route::get('/usuarios/new', 'App\Http\Controllers\UsuariosController@new')->middleware('auth');
Route::post('/usuarios/add', 'App\Http\Controllers\UsuariosController@add')->middleware('auth');
Route::get('/usuarios/{id}/edit', 'App\Http\Controllers\UsuariosController@edit')->middleware('auth');
Route::post('/usuarios/update/{id}', 'App\Http\Controllers\UsuariosController@update')->middleware('auth');
Route::delete('/usuarios/delete/{id}', 'App\Http\Controllers\UsuariosController@delete')->middleware('auth');


