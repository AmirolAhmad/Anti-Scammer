@extends('layouts.master')

@section('content')

<div class="container-login">

	@if(Session::has('global'))
  <div class="ui blue message">{{ Session::get('global') }}</div>
  @endif

	<div class="ui red message">You must login in order to file a report</div>

	<h2 class="ui header">
	  <i class="settings icon"></i>
	  <div class="content">
	    Sign in to your account
	    <div class="sub header">Manage your account settings and set e-mail preferences.</div>
	  </div>
	</h2>

	{{ Form::open(array('autocomplete' => 'off')) }}
	<div class="ui error form segment">
	  <div class="field">
	    <label>Username</label>
	    <div class="ui left labeled icon input">
	      <input placeholder="Username" type="text" name="username">
	      <i class="user icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
	    </div>
	  </div>
	  <div class="field">
	    <label>Password</label>
	    <div class="ui left labeled icon input">
	      <input placeholder="Password" type="password" name="password">
	      <i class="lock icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
	    </div>
	  </div>
	  <div class="inline field">
	    <div class="ui checkbox">
	      <input type="checkbox" name="remember" id="remember">
	      <label for="remember">Remember me</label>
	    </div>
	  </div>
	  @foreach ($errors->all() as $error)
	  <div class="ui error message">
	    <p>{{ $error }}</p>
	  </div>
	  @endforeach
	  <div class="inline field">
	  	<button type="submit" class="ui small teal submit button"><i class="sign in icon"></i> Login</button>
	  	<a href="{{ url('/forgot') }}" class="ui basic mini button">Forgot password? Click here</a>
	  </div>
	</div>
	{{ Form::close() }}

</div>

@stop