<?php

class HomeController extends BaseController {

	protected $layout = 'layouts.master';

	public function getIndex() {
		// Fetch all the data from report table
		$reports = DB::table('reports')->skip(0)->take(15)->get();

		return View::make('home', array(
			'reports' => $reports
		));

	}

	public function getReport() {

		$country_options = array('' => 'Please Select Your Country') + Country::lists('name', 'name');
		return View::make('report')->with('country_options',$country_options);

	}

	public function postReport() {

		$rules = array(
			'scammer_name' 			=> 'required|min:3|max:150',
			'nickname' 					=> 'min:3|max:50',
			'scammer_email' 		=> 'email|max:50',
			'age' 							=> 'numeric',
			'dob' 							=> 'date_format:"d/m/Y"',
			'nationality' 			=> 'required',
			'ic_number' 				=> 'min:3|max:80',
			'profile_picture' 	=> 'image',
			'attachment' 				=> 'mimes:jpeg,png,pdf',
			'subject' 					=> 'required|min:3|max:255',
			'location' 					=> 'required|min:3|max:100',
			'country' 					=> 'required',
			'contact_number' 		=> 'required|numeric',
			'acc_bank_number'		=> 'numeric|min:3',
			'bank_name' 				=> 'min:3|max:50',
			'description'				=> 'required|min:3|max:255'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::route('report')->withErrors($validator)->withInput();
		}

		$report = new Report;
		$report->scammer_name 		= Input::get('scammer_name');
		$report->nickname 				= Input::get('nickname');
		$report->scammer_email 		= Input::get('scammer_email');
		$report->age 							= Input::get('age');
		$report->dob 							= Input::get('dob');
		$report->nationality 			= Input::get('nationality');
		$report->ic_number 				= Input::get('ic_number');

		if(Input::hasFile('profile_picture')) {
			// Upload profile picture and save to upload folder
			$file 										= Input::file('profile_picture');
			$destinationPath 					= public_path() . '/uploads/';
			$filename 								= str_random(12) . '_' . $file->getClientOriginalName();
			$profile_picture 					= $file->move($destinationPath, $filename);

			$report->profile_picture 	= '/uploads/' . $filename;
		}

		if(Input::hasFile('attachment')) {
			// Upload attachment and save to upload folder
			$fileAttach 							= Input::file('attachment');
			$destinationPathAttach 		= public_path() . '/uploads/';
			$filenameAttach 					= str_random(12) . '_' . $fileAttach->getClientOriginalName();
			$attachment 							= $fileAttach->move($destinationPathAttach, $filenameAttach);

			$report->attachment 			= '/uploads/' . $filenameAttach;
		}

		$report->subject 					= Input::get('subject');
		$report->location 				= Input::get('location');
		$report->country 					= Input::get('country');
		$report->contact_number 	= Input::get('contact_number');
		$report->acc_bank_number 	= Input::get('acc_bank_number');
		$report->bank_name 				= Input::get('bank_name');
		$report->description 			= Input::get('description');
		$report->owner_id					= Auth::user()->id;
		$report->reporter					= Auth::user()->fullname;

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
			'fullname' 				=> 'required|min:3',
			'email' 					=> 'required|email'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::route('edit')->withErrors($validator)->withInput();
		}

		$edit 						= User::find(Auth::user()->id);
		$edit->fullname 	= Input::get('fullname');
		$edit->email 			= Input::get('email');
		$edit->save();

		return Redirect::route('edit')->with('success', 'Your profile has been update.');
	}

	public function getPassword() {

		return View::make('change-password');

	}

	public function updatePassword() {

		$rules = array(
			'current_password' 				=> 'required',
			'password' 								=> 'required|min:8',
			'password_confirmation'		=> 'required|same:password'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {

			return Redirect::route('change-password')->withErrors($validator);

		} else {

			$user 							= User::find(Auth::user()->id);
			$current_password 	= Input::get('current_password');
			$password 					= Input::get('password');

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

	public function getViewReport($id) {

		$report = DB::table('reports')->where('id', $id)->first();

		if($report && $report->owner_id == Auth::user()->id) {
			return View::make('view', array(
				'report' => $report
			));
		} elseif(!$report) {
			return Redirect::route('list')->with('global', 'Sorry. Couldn\'t find that report.');
		}
		else {
			return Redirect::route('list')->with('global', 'You have no authorized to view that report.');
		}

	}

	public function showViewReport($id) {
		
		$country_options = array('' => 'Please Select Your Country') + Country::lists('name', 'name');
		$report = DB::table('reports')->where('id', $id)->first();
		//echo "<pre>";
		//print_r($report);exit;
		if($report && $report->owner_id == Auth::user()->id) {
			return View::make('edit-report', array(
				'report' => $report,
				'country_options' => $country_options
			));
		} elseif(!$report) {
			return Redirect::route('list')->with('global', 'Sorry. Couldn\'t find that report.');
		}
		else {
			return Redirect::route('list')->with('global', 'You have no authorized to edit that report.');
		}

	}

	public function editViewReport($id) {
		//echo($id);exit;
		$rules = array(
			'scammer_name' 			=> 'required|min:3|max:150',
			'nickname' 					=> 'min:3|max:50',
			'scammer_email' 		=> 'email|max:50',
			'age' 							=> 'numeric',
			'dob' 							=> 'date_format:"d/m/Y"',
			'nationality' 			=> 'required',
			'ic_number' 				=> 'min:3|max:80',
			'profile_picture' 	=> 'image',
			'attachment' 				=> 'mimes:jpeg,png,pdf',
			'subject' 					=> 'required|min:3|max:255',
			'location' 					=> 'required|min:3|max:100',
			'country' 					=> 'required',
			'contact_number' 		=> 'required|numeric',
			'acc_bank_number'		=> 'numeric|min:3',
			'bank_name' 				=> 'min:3|max:50',
			'description'				=> 'required|min:3|max:255'
		);

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return Redirect::route('report')->withErrors($validator)->withInput();
		}

		$report 									= Report::find($id);
		$report->scammer_name 		= Input::get('scammer_name');
		$report->nickname 				= Input::get('nickname');
		$report->scammer_email 		= Input::get('scammer_email');
		$report->age 							= Input::get('age');
		$report->dob 							= Input::get('dob');
		$report->nationality 			= Input::get('nationality');
		$report->ic_number 				= Input::get('ic_number');

		if(Input::hasFile('profile_picture')) {
			// Upload profile picture and save to upload folder
			$file 										= Input::file('profile_picture');
			$destinationPath 					= public_path() . '/uploads/';
			$filename 								= str_random(12) . '_' . $file->getClientOriginalName();
			$profile_picture 					= $file->move($destinationPath, $filename);

			$report->profile_picture 	= '/uploads/' . $filename;
		}

		if(Input::hasFile('attachment')) {
			// Upload attachment and save to upload folder
			$fileAttach 							= Input::file('attachment');
			$destinationPathAttach 		= public_path() . '/uploads/';
			$filenameAttach 					= str_random(12) . '_' . $fileAttach->getClientOriginalName();
			$attachment 							= $fileAttach->move($destinationPathAttach, $filenameAttach);

			$report->attachment 			= '/uploads/' . $filenameAttach;
		}
		
		$report->subject 					= Input::get('subject');
		$report->location 				= Input::get('location');
		$report->country 					= Input::get('country');
		$report->contact_number 	= Input::get('contact_number');
		$report->acc_bank_number 	= Input::get('acc_bank_number');
		$report->bank_name 				= Input::get('bank_name');
		$report->description 			= Input::get('description');
		$report->owner_id					= Auth::user()->id;
		$report->reporter					= Auth::user()->fullname;

		$report->save();

		return Redirect::route('list')->with('success', 'Your profile has been update.');

	}

	public function listView() {

		// Fetch all the data from the specific user
		$reports = Auth::user()->reports;

		return View::make('list', array('reports' => $reports));

	}

	public function getSearch() {

		$q = Input::get('search');

    $searchTerms = explode(' ', $q);

    $query = DB::table('reports');

    foreach($searchTerms as $term)
    {
        $query->where('nickname', 'LIKE', '%'. $term .'%')
        			->orWhere('country', 'LIKE', '%'. $term .'%')
        			->orWhere('scammer_email', 'LIKE', '%'. $term .'%')
        			->orWhere('scammer_name', 'LIKE', '%'. $term .'%');
    }

    $results = $query->get();
    return View::make('search', array('reports' => $results));

	}

}