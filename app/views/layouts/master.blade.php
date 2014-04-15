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
switch($current_page){
    case 'login':
        $login = 'active';
        break;
    case 'register':
        $register = 'active';
        break;
    default:
        $home = 'active';
        break;
}
?>
  <!-- Top Menu -->
  <div class="ui teal inverted small menu no-border">
    <a href="{{ url('/') }}" class="{{ $home }} item">
      <i class="home icon"></i> Home
    </a>
    <a class="item">
      <i class="grid layout icon"></i> Browse
    </a>
    <a class="item">
      <i class="mail icon"></i> Messages
    </a>

    <?php if (Session::has('user')) { ?>
    <div class="item">
      <a class="red ui icon button" data-content="File a report" href="{{ URL::route('report') }}">
        <i class="edit icon"></i>
      </a>
    </div>
    <?php } else { ?>
    <div class="item">
      <a class="red ui icon button" data-content="File a report" href="{{ URL::route('login') }}">
        <i class="edit icon"></i>
      </a>
    </div>
    <?php } ?>

    <div class="right menu">
      <?php if (!Session::has('user')) { ?>
      <a href="{{ url('/register') }}" class="{{ $register }} item">
        <i class="user icon"></i> Register
      </a>
      <a href="{{ url('/login') }}" class="{{ $login }} item">
        <i class="key icon"></i> Login
      </a>
      <?php } ?>
      
      <?php if (Session::has('user')) { ?>
      <div class="ui dropdown item">
        <img class="ui avatar image" src="<?= Gravatar::src(Auth::user()->email) ?>"> {{ Auth::user()->fullname }} <i class="icon dropdown"></i>
        <div class="menu">
          <a href="{{ url('/edit') }}" class="item"><i class="edit icon"></i> Edit Profile</a>
          <a href="{{ url('/change-password') }}" class="item"><i class="key icon"></i> Change Password</a>
          <a class="item"><i class="settings icon"></i> Account Settings</a>
          <a href="{{ url('/logout') }}" class="item"><i class="off icon"></i> Logout</a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  
  @yield('message')

  @yield('content')
  
</body>
</html>