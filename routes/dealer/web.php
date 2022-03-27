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

Route::domain('dealer.prithwi.com')->name('dealer.')->namespace('Dealer')->group(function () {
	Auth::routes();
	//dd(Route);
	Route::group(['middleware' => ['auth:dealer']], function () {
		Route::get('/home', 'HomeController@index')->name('home');	
	});
	//dd(Route::getRoutes()) ;
});


