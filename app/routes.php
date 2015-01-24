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
	Route::get('/calendar', 'AdminDashboardController@calendar');

	Route::resource('barangays', 'BarangaysController');
	Route::resource('organizations', 'EmployersController');
	Route::resource('trainers', 'TrainersController');
	Route::resource('trainees', 'TraineesController');
	Route::resource('barangaychairmen', 'BarangayChairmenController');

    Route::resource('courses', 'CoursesController');

    Route::get('users', 'UsersController@index');
});

// Login routes
Route::group(['namespace' => 'Controllers\Admin'], function() {
	Route::get('/login', ['as' => 'user.login', 'uses' => 'SessionController@login']);
	Route::get('/logout', ['as' => 'user.login', 'uses' => 'SessionController@logout']);
	Route::post('/login', ['as' => 'user.dologin', 'uses' => 'SessionController@doLogin']);
	Route::get('/createAdmin', ['uses' => 'SessionController@registerAdmin']);
});

/**
 * Front routes
 */
Route::group(['namespace' => 'Controllers\Front'], function() {
    Route::get('/', 'FrontDashboardController@index');
    
    Route::get('training', 'TrainingController@index');
    Route::get('training/request', 'TrainingController@request');
    Route::post('training/store', 'TrainingController@store');
});

/**
 * Trainer routes
 */
Route::group(['namespace' => 'Controllers\Trainer', 'prefix' => 'trainer'], function() {
	Route::get('/', 'TrainerDashboardController@index');
});

/**
 * Trainee routes
 */
Route::group(['namespace' => 'Controllers\Trainee', 'prefix' => 'trainee'], function() {
	Route::get('/', 'TraineeDashboardController@index');
});

/**
 * Kapitan routes
 */
Route::group(['namespace' => 'Controllers\Kapitan', 'prefix' => 'trainer'], function() {
	Route::get('/', 'KapitanDashboardController@index');
});