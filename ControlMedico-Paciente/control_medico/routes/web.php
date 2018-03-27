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
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::post('/appointments/store', 'AppointmentController@store');
Route::post('/appointments/update/{id}', 'AppointmentController@update');
Route::get('/appointments/show/{id}', 'AppointmentController@show');
Route::get('/appointments/edit/{id}', 'AppointmentController@edit');
Route::get('/appointments/destroy/{id}', 'AppointmentController@destroy');
Route::resource('appointments', 'AppointmentController');
//
Route::post('/users/store', 'UserController@store');
Route::post('/users/update/{id}', 'UserController@update');
Route::get('/users/show/{id}', 'UserController@show');
Route::get('/users/edit/{id}', 'UserController@edit');
Route::get('/users/destroy/{id}', 'UserController@destroy');
Route::resource('users', 'UserController');
