@extends('layouts.master')

@section('content')

<div class="container">
	<h1>{{ $report->scammer_name }}</h1>
	<h1>{{ $report->scammer_email }}</h1>
</div>

@stop