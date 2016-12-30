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
Route::get('/', 'FrontController@index');
Route::get('Help/HowDoesItWork', 'HelpController@howDoesItWork');
Route::get('Help/HowToTravel', 'HelpController@howToTravel');
Route::get('Help/HowToBeAGuide', 'HelpController@howToBeAGuide');
Route::get('Help/Questions', 'HelpController@questions');	
Route::get('logout', 'LogController@logout');
Route::resource('Help', 'HelpController');
Route::resource('Admin/Help', 'InfoController');
Route::resource('User', 'UserController');
Route::resource('log', 'LogController');
Route::resource('Admin', 'AdminController');
Route::resource('Myplans', 'TouristicPlanController');
Route::get('/states', 'TouristicPlanController@states');
Route::get('/cities', 'TouristicPlanController@cities');

