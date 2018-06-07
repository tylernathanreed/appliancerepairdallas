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

// Home
Route::get('/', [
	'as' => 'pages.home',
	'uses' => 'PagesController@home'
]);

// Pricing
Route::get('pricing', [
	'as' => 'pages.pricing',
	'uses' => 'PagesController@pricing'
]);

// Contact
Route::get('contact', [
	'as' => 'pages.contact',
	'uses' => 'PagesController@contact'
]);

// Services
Route::group(['prefix' => 'resources'], function() {

	// Content Sliders
	Route::get('content-sliders', [
		'as' => 'pages.resources.content-sliders',
		'uses' => 'PagesController@resourcesContentSliders'
	]);


});