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
	return View::make('adminLogin');
});

Route::get('/admin', function()
{
	return View::make('adminView');
});

//Route::get('/poiList', function()
//{
//	return View::make('getPois');
//});

Route::resource('get', 'GetController');

Route::resource('admins', 'AdminsController');

Route::resource('pois', 'PoisController');

Route::resource('media', 'MediaController');

Route::resource('media', 'MediaController');

Route::resource('badges', 'BadgesController');