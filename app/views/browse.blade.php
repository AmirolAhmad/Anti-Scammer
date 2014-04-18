@extends('layouts.master')

@section('content')

<div class="container">

  <div class="ui info icon message">
    <i class="close icon"></i>
    <i class="thumbs up outline icon"></i>
    <div class="content">
      <div class="header">
        Raise your hand and help the world.
      </div>
      <p>If you are a victim or just want to report a scamming activities did by someone, you come to the right place. Register and submit a report and let the world know who is that scammer.</p>
      <div class="ui tiny buttons">
        <a href="{{ url('/register') }}" class="ui red button">
          <i class="add icon"></i>
          Register
        </a>
        <div class="or"></div>
        <a href="{{ url('/login') }}" class="ui purple button">
          <i class="user icon"></i>
          Sign in
        </a>
      </div>
    </div>
  </div>

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
          <div class="icon mini red ui button" data-content="Request to remove">
            <i class="mail icon"></i>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

 </div>

@stop