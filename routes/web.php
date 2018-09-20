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

Route::get('faq', [
	'as' => 'pages.faq',
	'uses' => 'PagesController@faq'
]);

////////////////////
//* About Styles *//
////////////////////

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

//////////////////////
//* Service Styles *//
//////////////////////

// Services (Style 1)
Route::get('services/style-1', [
	'as' => 'pages.services.style-1',
	'uses' => 'PagesController@servicesStyle1'
]);

// Services (Style 2)
Route::get('services/style-2', [
	'as' => 'pages.services.style-2',
	'uses' => 'PagesController@servicesStyle2'
]);

// Services (Style 3)
Route::get('services/style-3', [
	'as' => 'pages.services.style-3',
	'uses' => 'PagesController@servicesStyle3'
]);

//////////////////////
//* Contact Styles *//
//////////////////////

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

// Resources
Route::group(['prefix' => 'resources'], function() {

	// Appliances
	Route::get('appliances', [
		'as' => 'pages.resources.appliances',
		'uses' => 'PagesController@resourcesAppliances'
	]);

	// Content Sliders
	Route::get('content-sliders', [
		'as' => 'pages.resources.content-sliders',
		'uses' => 'PagesController@resourcesContentSliders'
	]);

	// Manufacturer Numbers
	Route::get('manufacturer-numbers', [
		'as' => 'pages.resources.manufacturer-numbers',
		'uses' => 'PagesController@resourcesManufacturerNumbers'
	]);

	// Coverage
	Route::get('coverage', [
		'as' => 'pages.resources.coverage',
		'uses' => 'PagesController@resourcesCoverage'
	]);


});