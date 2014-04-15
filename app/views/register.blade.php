@extends('layouts.master')

@section('content')

<div class="container-login">

	<h2 class="ui header">
	  <i class="settings icon"></i>
	  <div class="content">
	    Register a new account
	    <div class="sub header">Manage your account settings and set e-mail preferences.</div>
	  </div>
	</h2>

	{{ Form::open(array('autocomplete' => 'off')) }}
	<div class="ui error form segment">
	  <div class="field">
	    <label>Full Name</label>
	    <div class="ui left labeled icon input">
	      <input placeholder="Full Name" type="text" name="fullname">
	      <i class="user icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
	    </div>
	  </div>
	  <div class="field">
	    <label>Email Address</label>
	    <div class="ui left labeled icon input">
	      <input placeholder="Email Address" type="text" name="email"{{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }}>
	      <i class="mail icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
	    </div>
	  </div>
	  <div class="field">
	    <label>Username</label>
	    <div class="ui left labeled icon input">
	      <input placeholder="Username" type="text" name="name">
	      <i class="user icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
	    </div>
	  </div>
	  <div class="field">
	    <label>Password</label>
	    <div class="ui left labeled icon input">
	      <input placeholder="Password" type="password" name="password" data-content="Should not less than 8 characters.">
	      <i class="lock icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
	    </div>
	  </div>
	  <div class="field">
	    <label>Confirm Password</label>
	    <div class="ui left labeled icon input">
	      <input placeholder="Confirm Password" type="password" name="password_confirmation" data-content="Should match with above password.">
	      <i class="lock icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
	    </div>
	  </div>
	  <div class="inline field">
	    <div class="ui checkbox">
	      <input name="terms" type="checkbox">
	      <label>I agree to the Terms and Conditions</label>
	    </div>
	  </div>
	  @foreach ($errors->all() as $error)
	  <div class="ui error message">
	    <p>{{ $error }}</p>
	  </div>
	  @endforeach
	  <button type="submit" class="ui small teal submit button"><i class="add sign icon"></i>Create my account</button>
	</div>
	{{ Form::close() }}

</div>

@stop