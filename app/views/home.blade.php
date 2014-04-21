@extends('layouts.master')

@section('title') 
   Anti-Scam Me | Let's build the safe world together
@stop

@section('content')
<div class="container">

  <div class="ui page grid overview segment announcement">
    <div class="row">
      <div class="column">
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
      </div>
    </div>
    
    <center>
      <h2 class="ui header list-scam" style="padding-top:1.5em">
        <div class="content">
          Latest List of Scammer
          <div class="sub header">Here you can view all the details about the scammer from all over the world.</div>
        </div>
      </h2>
    </center>

    <div class="ui two wide column"></div>
    <div class="sixteen wide column">
      <table class="ui table segment">
        <thead>
          <tr>
            <!-- <th>Reported By</th> -->
            <th>Scammer Name</th>
            <th>Subject</th>
            <th>Location</th>
            <th class="two wide">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($reports as $report)
          <tr>
            <!-- <td>{{ $report->reporter }}</td> -->
            <td>
              @if($report->profile_picture)
              <img class="ui avatar image" src="{{ URL::to($report->profile_picture); }}"> {{ $report->scammer_name }}
              @else
              <img class="ui avatar image" src="{{ URL::asset('img/default-avatar2.jpg') }}">  {{ $report->scammer_name }}
              @endif
            </td>
            <td>{{ $report->subject }}</td>
            <td>{{ $report->location }}, {{ $report->country }}</td>
            <td>
              <a href="{{ url('/view/' . $report->id) }}" class="icon mini teal ui button" data-content="View more info">
                <i class="info icon"></i>
              </a>
              <div class="icon mini red ui button" data-content="Flag as invalid">
                <i class="flag icon"></i>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <div class="ui page grid overview segment">
    <div class="row">
      <div class="column">
        <h1 class="center aligned ui header">
          Scam Tips Right In Your Finger
        </h1>
      </div>
    </div>
    <div class="ui two wide column"></div>
    <div class="sixteen wide column">
      <div class="ui three column center aligned stackable grid">
        <div class="column">
          <div class="ui icon header">
            <i class="circular users icon"></i>
            Know Beter 
          </div>
          <p>The first step that you should bear in mind is know that person better.</p>
        </div>
        <div class="column">
          <div class="ui icon header">
            <i class="circular browser icon"></i>
            Get Details
          </div>
          <p>Grab as much as you can the valid information of that person.</p>
        </div>
        <div class="column">
          <div class="ui icon header">
            <i class="circular globe icon"></i>
            Check Online
          </div>
          <p>In this era, you can search that person via internet to get more information.</p>
        </div>
      </div>
    </div>
  </div>
	
</div>

<div class="ui inverted page grid stackable relaxed feature segment">
  <div class="row">
    <div class="column">
      <h1 class="center aligned ui header">
        Get The Latest Update of Scam List
      </h1>
    </div>
  </div>
  <div class="row">
    <div class="ten wide column">
      <h2 class="ui header">What do you know about scamming activities?</h2>
      <p>A fraudulent scheme performed by a dishonest individual, group, or company in an attempt obtain money or something else of value. Scams traditionally resided in confidence tricks, where an individual would misrepresent themselves as someone with skill or authority, i.e. a doctor, lawyer, investor. After the internet became widely used, new forms of scams emerged such as lottery scams, scam baiting, email spoofing, phishing, or request for helps.</p>
      <p>This and other tips can be found in our newsletter, amazing right?</p>
    </div>
    <div class="six wide column">
      <div class="ui secondary form segment">
        <h3 class="ui header">Get Our Amazing Newsletter Bi-Daily</h3>
        <p>Sign up and get spammed with cats every day. We have no unsubscribe button!</p>
        <form action="http://antiscam.us4.list-manage.com/subscribe/post?u=bd50937a4220eba452447a57b&amp;id=35de891676" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div class="field">
          <div class="ui left icon action input">
            <i class="user icon"></i>
            <input name="EMAIL" type="email" placeholder="name@email.com" value="" id="mce-EMAIL">
            <input type="submit" name="subscribe" id="mc-embedded-subscribe" class="ui teal submit button" value="Subscribe">
          </div>
        </div>
        </form>
        <div class="ui error message"></div>
      </div>
    </div>
  </div>
</div>

<div class="ui page grid stackable segment">
  <div class="row">
    <div class="column">
      <h1 class="center aligned ui header">
        Scammer Are Anywhere In This World
      </h1>
      <div class="ui horizontal divider"><i class="heart icon"></i></div>
    </div>
  </div>
  <div class="center four column aligned row">
    <div class="column">
      <div class="ui text shape">
        <div class="sides">
          <div class="active side">
            <i class="huge circular github icon"></i>
          </div>
          <div class="side">
            <i class="huge circular facebook icon"></i>
          </div>
          <div class="side">
            <i class="huge circular maxcdn icon"></i>
          </div>
          <div class="side">
            <i class="huge circular pinterest icon"></i>
          </div>
          <div class="side">
            <i class="huge circular weibo icon"></i>
          </div>
          <div class="side">
            <i class="huge circular flickr icon"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="ui text shape">
        <div class="sides">
          <div class="side">
            <i class="huge circular github icon"></i>
          </div>
          <div class="side">
            <i class="huge circular facebook icon"></i>
          </div>
          <div class="active side">
            <i class="huge circular maxcdn icon"></i>
          </div>
          <div class="side">
            <i class="huge circular pinterest icon"></i>
          </div>
          <div class="side">
            <i class="huge circular weibo icon"></i>
          </div>
          <div class="side">
            <i class="huge circular flickr icon"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="ui text shape">
        <div class="sides">
          <div class="side">
            <i class="huge circular github icon"></i>
          </div>
          <div class="side">
            <i class="huge circular facebook icon"></i>
          </div>
          <div class="side">
            <i class="huge circular maxcdn icon"></i>
          </div>
          <div class="side">
            <i class="huge circular pinterest icon"></i>
          </div>
          <div class="active side">
            <i class="huge circular weibo icon"></i>
          </div>
          <div class="side">
            <i class="huge circular flickr icon"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="ui text shape">
        <div class="sides">
          <div class="side">
            <i class="huge circular github icon"></i>
          </div>
          <div class="side">
            <i class="huge circular facebook icon"></i>
          </div>
          <div class="side">
            <i class="huge circular maxcdn icon"></i>
          </div>
          <div class="side">
            <i class="huge circular pinterest icon"></i>
          </div>
          <div class="side">
            <i class="huge circular weibo icon"></i>
          </div>
          <div class="active side">
            <i class="huge circular flickr icon"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop