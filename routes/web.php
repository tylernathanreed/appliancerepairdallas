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

// About (Style 1)
Route::get('about/style-1', [
	'as' => 'pages.about.style-1',
	'uses' => 'PagesController@aboutStyle1'
]);

// About (Style 2)
Route::get('about/style-2', [
	'as' => 'pages.about.style-2',
	'uses' => 'PagesController@aboutStyle2'
]);

// About (Style 3)
Route::get('about/style-3', [
	'as' => 'pages.about.style-3',
	'uses' => 'PagesController@aboutStyle3'
]);

// About (Style 4)
Route::get('about/style-4', [
	'as' => 'pages.about.style-4',
	'uses' => 'PagesController@aboutStyle4'
]);

// Contact (Style 1)
Route::get('contact/style-1', [
	'as' => 'pages.contact.style-1',
	'uses' => 'PagesController@contactStyle1'
]);

// Contact (Style 2)
Route::get('contact/style-2', [
	'as' => 'pages.contact.style-2',
	'uses' => 'PagesController@contactStyle2'
]);

// Contact (Style 3)
Route::get('contact/style-3', [
	'as' => 'pages.contact.style-3',
	'uses' => 'PagesController@contactStyle3'
]);

// Services
Route::group(['prefix' => 'resources'], function() {

	// Content Sliders
	Route::get('content-sliders', [
		'as' => 'pages.resources.content-sliders',
		'uses' => 'PagesController@resourcesContentSliders'
	]);


});