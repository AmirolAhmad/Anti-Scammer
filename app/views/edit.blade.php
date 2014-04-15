@extends('layouts.master')

@section('content')

<div class="container-login">

	<h2 class="ui header">
	  <i class="settings icon"></i>
	  <div class="content">
	    Edit Profile
	    <div class="sub header">Manage your account settings and set e-mail preferences.</div>
	  </div>
	</h2>

	{{ Form::open(array('autocomplete' => 'off')) }}
	<div class="ui error form segment">
	  @if(Session::has('success'))
	  <div class="ui blue message">{{ Session::get('success') }}</div>
	  @endif
	  <div class="field">
	  	<center>
	  		<div class="ui fade reveal">
		  		<img class="visible circular ui image content" src="<?= Gravatar::src(Auth::user()->email, 200) ?>">
		  		<img class="hidden circular ui image content" src="<?= Gravatar::src('lisa.andria11@gmail.com', 200) ?>">
		  	</div>
	  	</center>
	  </div>
	  <div class="field">
	    <label>Full Name</label>
	    <div class="ui left labeled icon input">
	      <input type="text" name="fullname" value="{{ Auth::user()->fullname }}">
	      <i class="user icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
	    </div>
	  </div>
	  <div class="field">
	    <label>Email Address</label>
	    <div class="ui left labeled icon input">
	      <input type="email" name="email" value="{{ Auth::user()->email }}">
	      <i class="mail icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
	    </div>
	  </div>
	  <div class="field">
	    <label>Username</label>
	    <div class="ui left labeled icon input">
	      <input disabled="disabled" type="text" name="name" value="{{ Auth::user()->name }}">
	      <i class="user icon"></i>
	    </div>
	  </div>
	  @foreach ($errors->all() as $error)
	  <div class="ui error message">
	    <p>{{ $error }}</p>
	  </div>
	  @endforeach
	  <input type="submit" class="ui blue submit button" value="Update">
	</div>
	{{ Form::close() }}

</div>
@stop