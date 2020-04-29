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

	Route::namespace('Front')->group(function () {

		Auth::routes();

		Route::get('/', function () {return view('pc.front.index');	})->name('home');
		Route::get('/cookie', 'CookieController@index');

		Route::group(['prefix' => 'member'], function () {
			Route::get('/', 'MemberController@index');
		});

	});
	    
});
