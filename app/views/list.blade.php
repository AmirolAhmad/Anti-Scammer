@extends('layouts.master')

@section('content')

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

@if(Session::has('global'))
<div class="ui red message">{{ Session::get('global') }}</div>
@endif
  <h2 class="ui header">
    <i class="table icon"></i>
    <div class="content">
      List of scammer submitted by you
      <div class="sub header">Here you can view all the details about the scammer from all over the world.</div>
    </div>
  </h2>

  <table class="ui table segment">
    <thead>
      <tr>
        <th>Scammer Name</th>
        <th>Subject</th>
        <th>Location</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($reports as $report)
      <tr>
        <td>
          <img class="ui avatar image" src="{{ URL::to($report->profile_picture); }}"> {{ $report->scammer_name }}
        </td>
        <td>{{ $report->subject }}</td>
        <td>{{ $report->location }}, {{ $report->country }}</td>
        <td>
          <a href="{{ url('/view/' . $report->id) }}" class="icon mini teal ui button" data-content="View more info">
            <i class="info icon"></i>
          </a>
          <a href="{{ url('/edit-report/' . $report->id) }}" class="icon mini purple ui button" data-content="Click to edit">
            <i class="edit icon"></i>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
	
</div>
@stop