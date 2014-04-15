<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'));
//Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'))->before('auth');

Route::get('/report', array('as' => 'report', 'uses' => 'HomeController@getReport'));
Route::post('/report', array('uses' => 'HomeController@postReport'))->before('csrf');

Route::get('/login', array('as' => 'login', 'uses' => 'AuthController@getLogin'))->before('guest');
Route::post('login', array('uses' => 'AuthController@postLogin'))->before('csrf');

Route::get('/register', array('as' => 'register', 'uses' => 'AuthController@getRegister'))->before('guest');
Route::post('register', array('uses' => 'AuthController@postRegister'))->before('csrf');

Route::get('/logout', array('uses' => 'AuthController@logOut'));

Route::get('/edit', array('as' => 'edit', 'uses' => 'HomeController@getProfile'))->before('auth');
Route::post('/edit', array('uses' => 'HomeController@updateProfile'))->before('csrf');

Route::get('/change-password', array('as' => 'change-password', 'uses' => 'HomeController@getPassword'))->before('auth');
Route::post('/change-password', array('uses' => 'HomeController@updatePassword'))->before('csrf');