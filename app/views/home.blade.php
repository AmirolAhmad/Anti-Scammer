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

  <div class="ui page grid overview segment">
    
    <center>
      <h2 class="ui header">
        <div class="content">
          List of scammer
          <div class="sub header">Here you can view all the details about the scammer from all over the world.</div>
        </div>
      </h2>
    </center>

    <div class="ui two wide column"></div>
    <div class="sixteen wide column">
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
  </div>

  <div class="ui page grid overview segment">
    <div class="row">
      <div class="column">
        <h1 class="center aligned ui header">
          Cat Tips Right In Your Inbox
        </h1>
      </div>
    </div>
    <div class="ui two wide column"></div>
    <div class="sixteen wide column">
      <div class="ui three column center aligned stackable grid">
        <div class="column">
          <div class="ui icon header">
            <i class="circular book link icon"></i>
            Courses 
          </div>
          <p>Take your kitty to a cat-ducation course and learn how to treat her well.</p>
        </div>
        <div class="column">
          <div class="ui icon header">
            <i class="circular code link icon"></i>
            Library
          </div>
          <p>Dig through our cat library to found out amazing things you can do with your kitty.</p>
        </div>
        <div class="column">
          <div class="ui icon header">
            <i class="circular user link icon"></i>
            Community
          </div>
          <p>Get feedback on your cat from a community of loving pet owners on our online bulletin board system.</p>
        </div>
      </div>
    </div>
  </div>
	
</div>

<div class="ui inverted page grid stackable relaxed feature segment">
  <div class="row">
    <div class="column">
      <h1 class="center aligned ui header">
        Cat Tips Right In Your Inbox
      </h1>
    </div>
  </div>
  <div class="row">
    <div class="ten wide column">
      <h2 class="ui header">How to Win Your Cats Attention</h2>
      <p>Getting your cat to notice you is a large part of being a pet owner. Although I have a lot of patience for writing things about cats, perhaps this might be enough body copy to make this section of text look filled out.</p>
      <p>This and other tips can be found in our newsletter, amazing right?</p>
      <div class="ui basic inverted animated button button">
        <div class="visible content">Read More</div>
        <div class="hidden content"><i class="right arrow icon"></i></div>
      </div>
    </div>
    <div class="six wide column">
      <div class="ui secondary form segment">
        <h3 class="ui header">Get Our Amazing Newsletter Bi-Daily</h3>
        <p>Sign up and get spammed with cats every day. We have no unsubscribe button!</p>
        <div class="field">
          <div class="ui left icon action input">
            <i class="user icon"></i>
            <input name="email" type="text" placeholder="name@email.com">
            <div class="ui teal submit button">Sign up</div>
          </div>
        </div>
        <div class="ui error message"></div>
      </div>
    </div>
  </div>
</div>

<div class="ui page grid stackable segment">
  <div class="row">
    <div class="column">
      <h1 class="center aligned ui header">
        Many Companies Rely on Our Cat Knowledge
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