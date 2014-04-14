<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'))->before('auth');

Route::get('/report', array('as' => 'report', 'uses' => 'HomeController@getReport'));
Route::post('/report', array('uses' => 'HomeController@postReport'))->before('csrf');

Route::get('/client', array('as' => 'client', 'uses' => 'AuthController@getLogin'))->before('guest');
Route::post('/client', array('uses' => 'AuthController@postLogin'))->before('csrf');