<?php

class AuthController extends Controller {

	public function getLogin() {
		return View::make('client');
	}

	public function postLogin(){
		$rules = array(
			'username' => 'required',
			'password' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::route('client')->withErrors($validator);
		}

		$auth = Auth::attempt(array(
			'name' 		=> Input::get('username'),
			'password' 	=> Input::get('password')
			), false);

		if (!$auth){
			return Redirect::route('client')->withErrors(array(
				'Invalid credentials were provided.'
				));
		}

		return View::make('home');
	}
}