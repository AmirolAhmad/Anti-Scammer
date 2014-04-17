@extends('layouts.master')

@section('content')

@if($reports)

<div class="container">

  <div class="ui info message">
	  <i class="close icon"></i>
	  <div class="header">
	    Was this what you are searching for?
	  </div>
	</div>

  <h2 class="ui header">
    <i class="table icon"></i>
    <div class="content">
      List of scammer
      <div class="sub header">Here you can view all the details about the scammer from all over the world.</div>
    </div>
  </h2>

  <table class="ui table segment">
    <thead>
      <tr>
        <th>Reported By</th>
        <th>Scammer Name</th>
        <th>Subject</th>
        <th>Location</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($reports as $report)
      <tr>
        <td>{{ $report->reporter }}</td>
        <td>
          <img class="ui avatar image" src="{{ URL::to($report->profile_picture); }}"> {{ $report->scammer_name }}
        </td>
        <td>{{ $report->subject }}</td>
        <td>{{ $report->location }}, {{ $report->country }}</td>
        <td>
          <a href="{{ url('/view/' . $report->id) }}" class="icon mini teal ui button" data-content="View more info">
            <i class="info icon"></i>
          </a>
          <div class="icon mini purple ui button" data-content="Click to copy the URL">
            <i class="external url icon"></i>
          </div>
          <div class="icon mini red ui button" data-content="Request to remove">
            <i class="mail icon"></i>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
 </div>
  @else
<div class="container-login">

  <div class="ui error message">
	  <div class="header">
	    Ops! Can't find that word for you. But we have this for you!
	  </div>
	</div>
	 
	 <img class="ui huge image" src="{{ URL::to('img/search-error.jpg'); }}">

</div>
  @endif
	

@stop