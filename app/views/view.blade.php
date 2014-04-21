@extends('layouts.master')

@section('title') 
	Scammer details | Anti-Scam Me
@stop

@section('content')

<div class="container-login">
	<div class="ui form segment">
		<div class="ui top attached label">
			<center><h2>{{ $report->scammer_name }}</h2></center>
		</div>
		<div class="field">
	  	<center>
	  		<div class="ui">
	  			@if($report->profile_picture)
		  		<img class="circular ui image content" src="{{ $report->profile_picture }}" width="200" height="200">
		  		@else
			    <img class="circular ui image content" src="{{ URL::asset('img/default-avatar2.jpg') }}" width="200" height="200">
			    @endif
		  	</div>
	  	</center>
	  </div>
	  <div class="two fields">
		  <div class="field">
		    <div class="ui ribbon label">Nickname</div>
		    @if($report->nickname)
		    <p>{{ $report->nickname }}</p>
		    @else
		    <p>N/A</p>
		    @endif
		  </div>
		  <div class="field">
		    <div class="ui ribbon label">Scammer Email</div>
		    @if($report->scammer_email)
		    <p>{{ $report->scammer_email }}</p>
		    @else
		    <p>N/A</p>
		    @endif
		  </div>
		</div>
	  <div class="two fields">
		  <div class="field">
		    <div class="ui ribbon label">Age</div>
		    @if($report->age)
		    <p>{{ $report->age }}</p>
		    @else
		    <p>N/A</p>
		    @endif
		  </div>
		  <div class="field">
		    <div class="ui ribbon label">Date of birth</div>
		    @if($report->dob)
		    <p>{{ $report->dob }}</p>
		    @else
		    <p>N/A</p>
		    @endif
		  </div>
		</div>
	  <div class="two fields">
		  <div class="field">
		    <div class="ui ribbon label">Nationality</div>
		    <p>{{ $report->nationality }}</p>
		  </div>
		  <div class="field">
		    <div class="ui ribbon label">Passport/Identification Card Number</div>
		    @if($report->ic_number)
		    <p>{{ $report->ic_number }}</p>
		    @else
		    <p>N/A</p>
		    @endif
		  </div>
		</div>
		<div class="field">
		    <div class="ui ribbon label">Contact Number</div>
		    @if($report->contact_number)
		    <p>{{ $report->contact_number }}</p>
		    @else
		    <p>N/A</p>
		    @endif
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
		    @if($report->acc_bank_number)
		    <p>{{ $report->acc_bank_number }}</p>
		    @else
		    <p>N/A</p>
		    @endif
		  </div>
		  <div class="field">
		    <div class="ui ribbon label">Bank Name</div>
		    @if($report->bank_name)
		    <p>{{ $report->bank_name }}</p>
		    @else
		    <p>N/A</p>
		    @endif
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