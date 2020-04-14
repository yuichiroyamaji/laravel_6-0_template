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

Route::domain(config('domain.front'))->group(function () {

	Route::get('/front', function () {
	    	return view('welcome');
		});

	Route::group(['namespace' => 'Front'], function()
    {
    	Route::get('/cookie', 'CookieController@index');
	});

	    
});
