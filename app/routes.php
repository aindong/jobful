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

/**
 * Admin routes
 */
Route::group(['namespace' => 'Controllers\Admin', 'prefix' => 'admin'], function() {
	Route::get('/', 'AdminDashboardController@index');

	Route::resource('barangays', 'BarangaysController');
	Route::resource('employers', 'EmployersController');
	Route::resource('trainers', 'TrainersController');
	Route::resource('trainees', 'TraineesController');

    Route::resource('courses', 'CoursesController');
});

/**
 * Front routes
 */
Route::group(['namespace' => 'Controllers\Front'], function() {

});


