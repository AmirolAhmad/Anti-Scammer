<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'));

/* View List Report (GET) */
Route::get('/view/{id}', array('as' => 'view', 'uses' => 'HomeController@getViewReport'));

/* View All Report (GET) */
Route::get('/browse', array('as' => 'browse', 'uses' => 'HomeController@getBrowseReport'));

/* Show Help Page (GET) */
Route::get('/help', array('as' => 'help', 'uses' => 'HomeController@getHelp'));

/* Error Page 404 */
App::missing(function($exception){ return Response::view('errors.missing', array(), 404); });

/* Search Form */
Route::post('/search', array('uses' => 'HomeController@getSearch'));

/* Un-authenticated group */
Route::group(array('before' => 'guest'), function() {

	/* CSRF protection group */
	Route::group(array('before' => 'csrf'), function() {

		/* Register Account (POST) */
		Route::post('register', array('uses' => 'AuthController@postRegister'));

		/* Login Account (POST) */
		Route::post('login', array('uses' => 'AuthController@postLogin'));

		/* Forgot Password (POST) */
		Route::post('/forgot', array('uses' => 'AuthController@postForgotPassword'));

	});

	/* Register Account (GET) */
	Route::get('/register', array('as' => 'register', 'uses' => 'AuthController@getRegister'));

	/* Login Account (GET) */
	Route::get('/login', array('as' => 'login', 'uses' => 'AuthController@getLogin'));

	/* Activate Account (GET) */
	Route::get('/account/activate/{code}', array('as' => 'account-activate', 'uses' => 'AuthController@getActivate'));

	/* Forgot Password (GET) */
	Route::get('/forgot', array('as' => 'forgot', 'uses' => 'AuthController@getForgotPassword'));
	Route::get('/account/reset/{code}', array('as' => 'account-reset', 'uses' => 'AuthController@getReset'));

});

/* Authenticated group */
Route::group(array('before' => 'auth'), function() {

	/* CSRF protection group */
	Route::group(array('before' => 'csrf'), function() {

		/* Edit Profile (POST) */
		Route::post('/edit', array('uses' => 'HomeController@updateProfile'));

		/* Change Password (POST) */
		Route::post('/change-password', array('uses' => 'HomeController@updatePassword'));

		/* Submit a report (POST) */
		Route::post('/report', array('uses' => 'HomeController@postReport'));

		/* Edit Report (POST) */
		Route::post('edit-report/{id}', array('uses' => 'HomeController@editViewReport'));

	});

	/* Edit Profile (GET) */
	Route::get('/edit', array('as' => 'edit', 'uses' => 'HomeController@getProfile'));

	/* Change Password (GET) */
	Route::get('/change-password', array('as' => 'change-password', 'uses' => 'HomeController@getPassword'));

	/* Submit a report */
	Route::get('/report', array('as' => 'report', 'uses' => 'HomeController@getReport'));

	/* Logout the user (GET) */
	Route::get('/logout', array('uses' => 'AuthController@logOut'));

	/* List the report (GET) */
	Route::get('/list', array('as' => 'list', 'uses' => 'HomeController@listView'));

	/* Edit Report (GET) */
	Route::get('/edit-report/{id}', array('as' => 'edit-report', 'uses' => 'HomeController@showViewReport'));

});
