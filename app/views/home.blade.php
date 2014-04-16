@extends('layouts.master')

@section('message')
  <div class="container">
    <div class="ui info icon message">
    	<i class="close icon"></i>
      <i class="inbox icon"></i>
      <div class="content">
        <div class="header">
          Raise your hand and help the world.
        </div>
        <p>Statistic showing that every 6 hours per day, 2 people has been scammed from all over the world!</p>
      </div>
    </div>
  </div>
@stop

@section('content')
<div class="container">
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
          <div class="icon mini teal ui button" data-content="View more info">
            <i class="info icon"></i>
          </div>
          <div class="icon mini red ui button" data-content="Click to copy the URL">
            <i class="external url icon"></i>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
	
</div>
@stop