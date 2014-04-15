@extends('layouts.master')

@section('content')

<div class="container-login">

	<h2 class="ui header">
	  <i class="key icon"></i>
	  <div class="content">
	    Change Password
	    <div class="sub header">Manage your account settings and set e-mail preferences.</div>
	  </div>
	</h2>

	{{ Form::open() }}
	<div class="ui error form segment">
		@if(Session::has('success'))
	  <div class="ui blue message">{{ Session::get('success') }}</div>
	  @endif
		@if(Session::has('global'))
	  <div class="ui red message">{{ Session::get('global') }}</div>
	  @endif
	  <div class="field">
	    <label>Current Password</label>
	    <div class="ui left labeled icon input">
	      <input type="password" name="current_password">
	      <i class="lock icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
	    </div>
	  </div>
	  <div class="field">
	    <label>New Password</label>
	    <div class="ui left labeled icon input">
	      <input type="password" name="password" data-content="Should not less than 8 characters.">
	      <i class="lock icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
	    </div>
	  </div>
	  <div class="field">
	    <label>Confirm Password</label>
	    <div class="ui left labeled icon input">
	      <input type="password" name="password_confirmation" data-content="Should match with above password.">
	      <i class="lock icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
	    </div>
	  </div>
	  @foreach ($errors->all() as $error)
	  <div class="ui error message">
	    <p>{{ $error }}</p>
	  </div>
	  @endforeach
	  <button type="submit" class="ui small teal submit button"><i class="key icon"></i> Update my password</button>
	</div>
	{{ Form::close() }}

</div>

@stop