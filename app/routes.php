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
Route::group(['namespace' => 'Controllers\Admin', 'prefix' => 'admin', 'before' => 'Sentry|inGroup:super admin'], function() {
	Route::get('/', 'AdminDashboardController@index');
	Route::get('/calendar', 'AdminDashboardController@calendar');

	Route::resource('barangays', 'BarangaysController');
	Route::resource('organizations', 'EmployersController');
	Route::resource('trainers', 'TrainersController');
	Route::resource('trainees', 'TraineesController');
	Route::resource('barangaychairmen', 'BarangayChairmenController');

    Route::resource('courses', 'CoursesController');
    Route::resource('requests', 'RequestsController', ['only' => ['index', 'edit', 'update']]);
    Route::resource('events', 'EventsController');

    Route::get('users', 'UsersController@index');
});

// Login routes
Route::group(['namespace' => 'Controllers\Admin'], function() {
	Route::get('/login', ['as' => 'user.login', 'uses' => 'SessionController@login']);
	Route::get('/logout', ['as' => 'user.login', 'uses' => 'SessionController@logout']);
	Route::post('/login', ['as' => 'user.dologin', 'uses' => 'SessionController@doLogin']);
	Route::get('/createAdmin', ['uses' => 'SessionController@registerAdmin', 'before' => 'Sentry|inGroup:super admin'	]);
});

/**
 * Front routes
 */
Route::group(['namespace' => 'Controllers\Front'], function() {
    Route::get('/', 'FrontDashboardController@index');
        
    Route::get('training', 'TrainingController@index');
    Route::get('statistics', 'TrainingController@stat');
    Route::get('training/{id}/show', 'TrainingController@show');
    Route::get('training/request', 'TrainingController@request');
    Route::post('training/store', 'TrainingController@store');

	Route::get('/events', 'EventsController@events');
});

/**
 * Trainer routes
 */
Route::group(['namespace' => 'Controllers\Trainer', 'prefix' => 'trainer', 'before' => 'Sentry|inGroup:trainer'], function() {
	Route::get('/', 'TrainerDashboardController@index');
	Route::get('/requests', 'TrainerDashboardController@request');
	Route::get('training/{id}/edit', 'TrainerDashboardController@edit');
});

/**
 * Trainee routes
 */
Route::group(['namespace' => 'Controllers\Trainee', 'prefix' => 'trainee', 'before' => 'Sentry|inGroup:trainee'], function() {
	Route::get('/', 'TraineeDashboardController@index');
	Route::get('/requests', 'TraineeDashboardController@request');
});

/**
 * Kapitan routes
 */
Route::group(['namespace' => 'Controllers\Kapitan', 'prefix' => 'kapitan', 'before' => 'Sentry|inGroup:kapitan'], function() {
	Route::get('/', 'KapitanDashboardController@index');
	Route::get('/requests', 'KapitanDashboardController@request');
});