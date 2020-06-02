<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () { return view('welcome');})->middleware('guest');

Route::auth();


Route::get('/home', 'HomeController@index');
Route::get('/profile/{id}', 'ProfileController@index')->where('id', '[0-9]+')->middleware('auth');
Route::get('/calendar', 'CalendarController@index');
Route::get('/notifications', 'NotificationsController@index');
Route::get('/family', 'FamilyController@index');
Route::get('/family/add', 'FamilyController@add');

Route::get('/register/client', 'RegistrationController@create');
Route::get('/register/entrepreneur', 'RegistrationEntController@create');
Route::post('/register', 'RegistrationController@store');
Route::post('/registerEnt', 'RegistrationEntController@store');



