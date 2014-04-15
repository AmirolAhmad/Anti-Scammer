<?php

class AuthController extends Controller {

	public function getLogin() {
		return View::make('login');
	}

	public function postLogin() {
		$rules = array(
			'username' => 'required',
			'password' => 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::route('login')->withErrors($validator);
		}

		$auth = Auth::attempt(array(
			'name' 		=> Input::get('username'),
			'password' 	=> Input::get('password')
			), false);

		if (!$auth){
			return Redirect::route('login')->withErrors(array(
				'Invalid credentials were provided.'
				));
		} else {
			Session::put('user', true);
		}

		return Redirect::route('home');
	}

	public function getRegister() {
		return View::make('register');
	}

	public function postRegister() {
		$rules = array(
			'fullname' 					=> 'required|min:3',
			'email' 					=> 'required|email|max:50|unique:users',
			'name' 						=> 'required|min:3|max:20|unique:users',
			'password' 					=> 'required|min:8|confirmed',
			'password_confirmation' 	=> 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::route('register')->withErrors($validator);
		}

		$register = new User;
		$register->fullname 	= Input::get('fullname');
		$register->email 		= Input::get('email');
		$register->name 		= Input::get('name');
		$register->password 	= Hash::make(Input::get('password'));
		$register->code 		= str_random(60);
		$register->save();

		return Redirect::route('login');
	}

	public function logOut() {
		Session::flush();
		return Redirect::route('login');
	}
}