@extends('layouts.master')

@section('message')
  <div class="container">
    <div class="ui icon message">
    	<i class="close icon"></i>
      <i class="inbox icon"></i>
      <div class="content">
        <div class="header">
          Have you heard about our mailing list?
        </div>
        <p>Get all the best inventions in your e-mail every day. Sign up now!</p>
      </div>
    </div>
  </div>
@stop

@section('content')
	<h1>Homepage</h1>
	

	<?php
	/*
		$username = input::get('username');
		echo $username;
	*/
	?>
@stop