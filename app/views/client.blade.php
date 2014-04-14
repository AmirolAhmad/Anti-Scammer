@extends('layouts.master')

@section('content')
	<h1>Client</h1>

	{{ Form::open() }}
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit">
	{{ Form::close() }}

@stop