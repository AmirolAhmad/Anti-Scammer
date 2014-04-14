@extends('layouts.master')

@section('content')

<div class="container-login">

	<h2 class="ui header">
	  <i class="settings icon"></i>
	  <div class="content">
	    Client
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
	      <input type="checkbox">
	      <label>I agree to the Terms and Conditions</label>
	    </div>
	  </div>
	  @foreach ($errors->all() as $error)
	  <div class="ui error message">
	    <p>{{ $error }}</p>
	  </div>
	  @endforeach
	  <input type="submit" class="ui blue submit button" value="Login">
	</div>
	{{ Form::close() }}

</div>

@stop