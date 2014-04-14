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
$client = '';
switch($current_page){
    case 'client':
        $client = 'active';
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
    <a href="{{ url('/client') }}" class="{{ $client }} item">
      <i class="users icon"></i>
      Client
    </a>
    <a class="item">
      <i class="grid layout icon"></i> Browse
    </a>
    <a class="item">
      <i class="mail icon"></i> Messages
    </a>
    <div class="item">
      <a class="red ui icon button" data-content="File a report" href="{{ URL::route('report') }}">
        <i class="edit icon"></i>
      </a>
    </div>
    <div class="right menu">
      <div class="ui dropdown item">
        <i class="setting icon"></i> More <i class="icon dropdown"></i>
        <div class="menu">
          <a class="item"><i class="edit icon"></i> Edit Profile</a>
          <a class="item"><i class="globe icon"></i> Choose Language</a>
          <a class="item"><i class="settings icon"></i> Account Settings</a>
        </div>
      </div>
    </div>
  </div>
  
  @yield('message')

  @yield('content')
  
</body>
</html>