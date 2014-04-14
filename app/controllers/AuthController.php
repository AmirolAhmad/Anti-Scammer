<?php

class AuthController extends Controller {

	public function getLogin() {
		return View::make('client');
	}

	public function postLogin(){
		$rules = array('username' => 'required', 'password' => 'required' );
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::route('client')->withErrors($validator);
		}

		return View::make('home');
	}
}