@extends('layouts.master')

@section('content')

<div class="container-login">

	<h2 class="ui header">
	  <i class="settings icon"></i>
	  <div class="content">
	    Forgot Password
	    <div class="sub header">Manage your account settings and set e-mail preferences.</div>
	  </div>
	</h2>

	{{ Form::open(array('autocomplete' => 'off')) }}
	<div class="ui error form piled segment">
		@if(Session::has('global'))
		<div class="ui red message">{{ Session::get('global') }}</div>
		@endif
	  <div class="field">
	    <label>Email Address</label>
	    <div class="ui left labeled icon input">
	      <input type="text" placeholder="Email address" name="email"{{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }}>
	      <i class="mail icon"></i>
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
	  <button type="submit" class="ui small red submit button"><i class="mail icon"></i> Reset my account</button>
	</div>
	{{ Form::close() }}

</div>

@stop