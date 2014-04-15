<?php

class HomeController extends BaseController {

	protected $layout = 'layouts.master';

	public function getIndex() {
		// Fetch all the data from the specific user
		//$reports = Auth::user()->reports;

		// Fetch all the data from report table
		$reports = DB::table('reports')->get();

		return View::make('home', array(
			'reports' => $reports
		));
	}

	public function getReport() {
		return View::make('report');
	}

	public function postReport() {
		$rules = array(
			'subject' 			=> 'required|min:3|max:255',
			'scammer_name' 		=> 'required|min:3|max:255',
			'location' 			=> 'required',
			'country' 			=> 'required',
			'contact_number' 	=> 'required|numeric',
			'acc_bank_number'	=> 'numeric'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::route('report')->withErrors($validator);
		}

		$report = new Report;
		$report->subject 			= Input::get('subject');
		$report->scammer_name 		= Input::get('scammer_name');
		$report->location 			= Input::get('location');
		$report->country 			= Input::get('country');
		$report->contact_number 	= Input::get('contact_number');
		$report->acc_bank_number 	= Input::get('acc_bank_number');
		$report->bank_name 			= Input::get('bank_name');
		$report->owner_id			= Auth::user()->id;
		$report->reporter			= Auth::user()->fullname;
		$report->save();

		return Redirect::route('home');

	}

	public function getProfile() {
		$user = DB::table('users')->where('id', Auth::user()->id)->first();

		return View::make('edit', array(
			'user' => $user
		));
	}

	public function updateProfile() {
		$rules = array(
			'fullname' 					=> 'required|min:3',
			'email' 					=> 'required|email'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::route('edit')->withErrors($validator);
		}

		$edit 				= User::find(Auth::user()->id);
		$edit->fullname 	= Input::get('fullname');
		$edit->email 		= Input::get('email');
		$edit->save();

		return Redirect::route('edit')->with('success', 'Your profile has been update.');
	}

	public function getPassword() {
		return View::make('change-password');
	}

	public function updatePassword() {
		$rules = array(
			'current_password' 			=> 'required',
			'password' 					=> 'required|min:8',
			'password_confirmation'		=> 'required|same:password'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {

			return Redirect::route('change-password')->withErrors($validator);

		} else {

			$user 				= User::find(Auth::user()->id);

			$current_password 	= Input::get('current_password');
			$password 			= Input::get('password');

			if(Hash::check($current_password, $user->getAuthPassword())) {
				$user->password = Hash::make($password);

				if($user->save()) {
					return Redirect::route('change-password')->with('success', 'Your password has been update.');
				}
			} else {
				return Redirect::route('change-password')->with('global', 'Your current password is incorrect.');
			}
		}

		return Redirect::route('change-password')->with('global', 'Your password could not be changed.');
	}

}