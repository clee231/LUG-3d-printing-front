<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('home', function() {return View::make('home');});
Route::get('information', function() {return View::make('information');});
Route::get('requirements', function() {return View::make('requirements');});
Route::get('login', function() {return View::make('login');});
Route::get('officer-schedule', function() {return View::make('officer-schedule');});
Route::get('new/model-upload', function() {return View::make('model-upload');});
Route::post('new/model-upload/file', 'modelController@uploadNewModel');
Route::get('new/{arg}/colors', 'modelController@previewColors');
Route::get('dev/{arg?}', 'DevController@showIndex');
