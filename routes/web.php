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

//Route::get('/create',  'TasksController@create');
//Route::post('/store', 'TasksController@store')->name('tasks.store');

Route::resource('passports','PassportController');
Route::get('create', 'PassportController@create');

Route::get('/', function () {
    return view('welcome');
});
