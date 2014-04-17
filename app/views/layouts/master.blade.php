<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <title>Anti Scammer</title>

  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/semantic.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="{{ URL::asset('assets/js/semantic.js') }}"></script>
  <script src="{{ URL::asset('assets/js/style.js') }}"></script>

</head>
<body>
<?php
$current_url = $_SERVER['REQUEST_URI'];
$current_page = end((explode('/', $current_url)));
$home = '';
$login = '';
$register = '';
$report = '';
$list = '';
$help = '';
switch($current_page){
    case 'login':
        $login = 'active';
        break;
    case 'register':
        $register = 'active';
        break;
    case 'report':
        $report = 'active';
        break;
    case 'list':
        $list = 'active';
        break;
    case 'help':
        $help = 'active';
        break;
    default:
        $home = 'active';
        break;
}
?>
  <!-- Top Menu -->
  <div class="ui red inverted small menu no-border">
    <a href="{{ url('/') }}" class="{{ $home }} item">
      <i class="home icon"></i> Home
    </a>
    <a class="item">
      <i class="grid layout icon"></i> Browse
    </a>
    <a class="item">
      <i class="mail icon"></i> Messages
    </a>

    @if(Auth::check())
    <div class="ui dropdown item">
      Report <i class="dropdown icon"></i>
      <div class="menu">
        <a class="{{ $report }} item" href="{{ URL::route('report') }}">
          <i class="edit icon"></i> Submit a report
        </a>
        <a class="{{ $list }} item" href="{{ URL::route('list') }}">
          <i class="browser icon"></i> List my report
        </a>
      </div>
    </div>
    @else
    <a class="{{ $report }} item" href="{{ URL::route('login') }}">
      <i class="edit icon"></i> Submit a report
    </a>
    @endif

    <div class="right menu">
    <div class="item">
      <div class="ui icon small input">
        {{ Form::open(array('url' => 'search')) }}
        <input placeholder="Search by name, email, nickname or country" type="text" data-content="Insert your search query here." name="search">
        {{ Form::close() }}
        <i class="search link icon"></i>
      </div>
    </div>
      @if(Auth::check())
      <div class="ui dropdown item">
        <img class="ui avatar image" src="<?= Gravatar::src(Auth::user()->email) ?>"> {{ Auth::user()->fullname }} <i class="icon dropdown"></i>
        <div class="menu">
          <a href="{{ url('/edit') }}" class="item"><i class="edit icon"></i> Edit Profile</a>
          <a href="{{ url('/change-password') }}" class="item"><i class="key icon"></i> Change Password</a>
          <a href="{{ url('/logout') }}" class="item"><i class="off icon"></i> Logout</a>
        </div>
      </div>
      @else
      <a href="{{ url('/register') }}" class="{{ $register }} item">
        <i class="user icon"></i> Register
      </a>
      <a href="{{ url('/login') }}" class="{{ $login }} item">
        <i class="key icon"></i> Login
      </a>
      @endif
      <a href="{{ url('/help') }}" class="{{ $help }} icon ui item" data-content="Need help?">
        <i class="help icon"></i>
      </a>
    </div>
  </div>
  

  @yield('content')

  <div class="ui inverted teal page grid segment">
    <div class="ten wide column">
      <div class="ui three column stackable grid">
        <div class="column">
          <div class="ui header">Courses</div>
          <div class="ui inverted link list">
            <a class="item">Registration</a>
            <a class="item">Course Calendar</a>
            <a class="item">Professors</a>
          </div>
        </div>
        <div class="column">
          <div class="ui header">Library</div>
          <div class="ui inverted link list">
            <a class="item">A-Z</a>
            <a class="item">Most Popular</a>
            <a class="item">Recently Changed</a>
          </div>
        </div>
        <div class="column">
          <div class="ui header">Community</div>
          <div class="ui inverted link list">
            <a class="item">BBS</a>
            <a class="item">Careers</a>
            <a class="item">Privacy Policy</a>
          </div>
        </div>
      </div>
    </div>
    <div class="six wide right floated aligned column">
      <h3 class="ui header">Contact Us</h3>
      <addr>
        237 Catberry Road <br>
        Milton Keynes, London <br>
      </addr>
      <p>(404) 867-5309</p>
    </div>
  </div>
  
</body>
</html>