<?php

class HomeController extends BaseController {

	protected $layout = 'layouts.master';

	public function getIndex() {
		$reports = Auth::user()->reports;

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

}