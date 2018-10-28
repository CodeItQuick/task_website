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

Route::get('/', 'LayoutController@index')->name('home');

Route::get('/login.html', 'LoginController@create');
Route::post('/login.html', 'LoginController@store');
Route::get('/logout.html', 'LoginController@destroy');

Route::get('/register.html', 'RegistrationController@create');
Route::post('/register.html', 'RegistrationController@store');

Route::get('tasks.html', 'TaskController@create');
