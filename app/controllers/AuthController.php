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
		} else {

			$remember = (Input::has('remember')) ? true : false;

			$auth = Auth::attempt(array(
				'name'			=> Input::get('username'),
				'password' 	=> Input::get('password'),
				'active' 		=> 1
			), $remember);

			if($auth) {

				return Redirect::intended('/');
			} else {

				return Redirect::route('login')->withErrors(array(
					'Invalid credentials were provided.'
				));
			}
		}

		return Redirect::route('login')->withErrors(arrays(
			'There was a problem signing you in.'
		));
	}

	public function getRegister() {
		return View::make('register');
	}

	public function postRegister() {
		$rules = array(
			'fullname' 								=> 'required|min:3',
			'email' 									=> 'required|email|max:50|unique:users',
			'name' 										=> 'required|min:3|max:20|unique:users',
			'password' 								=> 'required|min:8|confirmed',
			'password_confirmation' 	=> 'required',
			'terms'										=> 'required'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {

			return Redirect::route('register')->withErrors($validator)->withInput();
		} else {

			$email 			= Input::get('email');
			$fullname 	= Input::get('fullname');
			$name 			= Input::get('name');
			$password 	= Hash::make(Input::get('password'));
			// Activation Code
			$code 			= str_random(60);

			$user = User::create(array(
				'email' 		=> $email,
				'fullname' 	=> $fullname,
				'name' 			=> $name,
				'password' 	=> $password,
				'code' 			=> $code,
				'active' 		=> 0
			));

			if($user) {
				// Send confirmation email
				Mail::send('emails.auth.activate', array(
					'link' => URL::route('account-activate', $code),
					'fullname' => $user->fullname

				), function($message) use ($user) {

					$message->to($user->email, $user->fullname)->subject('Activate your account');

				});

				return Redirect::route('login')->with('global', 'Your account has been created. An email confirmation has been send to your email.');
			}

		}

	}

	public function getActivate($code) {
		$user = User::where('code', '=', $code)->where('active', '=', 0);

		if($user->count()) {
			$user 					= $user->first();

			// Update user to active state
			$user->active 	= 1;
			$user->code 		= '';

			if($user->save()) {
				return Redirect::route('login')->with('global', 'You account has been successfully activated! You may now login.');
			}
		}

		return Redirect::route('login')->with('global', 'Couldn\'t activate your account. Please try again later.' );
	}

	public function getForgotPassword() {
		return View::make('forgot');
	}

	public function postForgotPassword() {
		$rules = array(
			'email' => 'required|email'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {

			return Redirect::route('forgot')->withErrors($validator);
		} else {

			$user = User::where('email', '=', Input::get('email'));

			if($user->count()) {
				$user 								= $user->first();

				// Generate a new code and password
				$code 								= str_random(60);
				$password 						= str_random(10);

				$user->code 					= $code;
				$user->password_temp 	= Hash::make($password);

				if($user->save()) {

					Mail::send('emails.auth.forgot', array(
						'link' => URL::route('account-reset', $code),
						'fullname' => $user->fullname,
						'password' => $password

					), function($message) use ($user) {

						$message->to($user->email, $user->fullname)->subject('Your new password');
					});

					return Redirect::route('login')->with('global', 'A new password has been sent to your email.');

				}
			}

		}

		return Redirect::route('forgot')->with('global', 'Couldn\'t request new password.');

	}

	public function getReset($code) {
		$user = User::where('code', '=', $code)->where('password_temp', '!=', '');

		if($user->count()) {
			$user 								= $user->first();

			$user->password 			= $user->password_temp;
			$user->password_temp 	= '';
			$user->code 					= '';

			if($user->save()) {
				return Redirect::route('login')->with('global', 'Your account has been reset and please use your new password to login.');
			}
		}

		return Redirect::route('login')->with('global', 'Couldn\'t reset the password for your account.');

	}

	public function logOut() {
		Auth::logout();
		return Redirect::route('login');
	}
}