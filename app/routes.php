<?php

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'));
Route::get('/client', array('as' => 'client', 'uses' => 'AuthController@getLogin'))->before('guest');
Route::post('/client', array('uses' => 'AuthController@postLogin'))->before('csrf');