@extends('layouts.master')

@section('content')

<div class="container-login">
	<div class="ui form segment">
		<div class="ui top attached label">
			<center><h2>{{ $report->scammer_name }}</h2></center>
		</div>
		<div class="field">
	  	<center>
	  		<div class="ui">
		  		<img class="circular ui image content" src="{{ $report->profile_picture }}" width="200" height="200">
		  	</div>
	  	</center>
	  </div>
	  <div class="two fields">
		  <div class="field">
		    <div class="ui ribbon label">Nickname</div>
		    <p>{{ $report->nickname }}</p>
		  </div>
		  <div class="field">
		    <div class="ui ribbon label">Scammer Email</div>
		    <p>{{ $report->scammer_email }}</p>
		  </div>
		</div>
	  <div class="two fields">
		  <div class="field">
		    <div class="ui ribbon label">Age</div>
		    <p>{{ $report->age }}</p>
		  </div>
		  <div class="field">
		    <div class="ui ribbon label">Date of birth</div>
		    <p>{{ $report->dob }}</p>
		  </div>
		</div>
	  <div class="two fields">
		  <div class="field">
		    <div class="ui ribbon label">Nationality</div>
		    <p>{{ $report->nationality }}</p>
		  </div>
		  <div class="field">
		    <div class="ui ribbon label">Passport/Identification Card Number</div>
		    <p>{{ $report->ic_number }}</p>
		  </div>
		</div>
		<div class="field">
		    <div class="ui ribbon label">Contact Number</div>
		    <p>{{ $report->contact_number }}</p>
		  </div>
		<div class="ui inverted divider"></div>
	  <div class="two fields">
		  <div class="field">
		    <div class="ui ribbon label">Location</div>
		    <p>{{ $report->location }}</p>
		  </div>
		  <div class="field">
		    <div class="ui ribbon label">Country</div>
		    <p>{{ $report->country }}</p>
		  </div>
		</div>
		<div class="ui inverted divider"></div>
	  <div class="two fields">
		  <div class="field">
		    <div class="ui ribbon label">Account Bank Number</div>
		    <p>{{ $report->acc_bank_number }}</p>
		  </div>
		  <div class="field">
		    <div class="ui ribbon label">Bank Name</div>
		    <p>{{ $report->bank_name }}</p>
		  </div>
		</div>
		<div class="ui inverted divider"></div>
		  <div class="field">
		    <div class="ui ribbon label">Subject</div>
		    <p>{{ $report->subject }}</p>
		  </div>
		  <div class="field">
		    <div class="ui ribbon label">Description</div>
		    <p>{{ $report->description }}</p>
		  </div>
	</div>
</div>

@stop