@extends('layouts.master')

@section('content')

<div class="container-login">

  <div class="ui error message">
	  <div class="header">
	    Ops! Seems like Error 404! We can't find that for you. But we have this for you!
	  </div>
	</div>
	 
	 <img class="ui huge image" src="{{ URL::to('img/search-error.jpg'); }}">

</div>

@stop