<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'));

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

	});

	/* Edit Profile (GET) */
	Route::get('/edit', array('as' => 'edit', 'uses' => 'HomeController@getProfile'));

	/* Change Password (GET) */
	Route::get('/change-password', array('as' => 'change-password', 'uses' => 'HomeController@getPassword'));

	/* Submit a report */
	Route::get('/report', array('as' => 'report', 'uses' => 'HomeController@getReport'));

	/* Logout the user (GET) */
	Route::get('/logout', array('uses' => 'AuthController@logOut'));

});
