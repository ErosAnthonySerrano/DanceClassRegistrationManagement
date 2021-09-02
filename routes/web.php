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

Route::get('/', 'DanceClassController@index')->name('dclass.index');
Route::get('/danceclassstudent', 'DanceClassController@create')->name('dclass.create');
Route::post('/danceclassstudent', 'DanceClassController@store')->name('dclass.store');
Route::get('/danceclassstudent/{danceclass}', 'DanceClassController@edit')->name('dclass.edit');
Route::post('/danceclassstudent/{danceclass}', 'DanceClassController@update')->name('dclass.update');
Route::delete('/danceclassstudent/{danceclass}', 'DanceClassController@destroy')->name('dclass.destroy');

Route::post('/', 'DanceClassController@index')->name('dclass.index');