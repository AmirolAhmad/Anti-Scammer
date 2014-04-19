<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <meta name="description" content="Raise your hand and help the world. If you are a victim or just want to report a scamming activities did by someone, you come to the right place. Register and submit a report and let the world know who is that scammer">
  <meta name="keywords" content="anti scam,anti scammer,scammer,scamming activities,fraud,penipu,fraud people,scammer database,fraud database,dishonest individual,money,trick,lottery,baiting,email spoofing,phishing,request,duit,skim cepat kaya,mlm,multi level marketing,black market,nigeria,black money,russian">
  <meta name="author" content="Anti Scam Me">

  <title>Anti Scam Me</title>

  <link rel="shortcut icon" href="{{ URL::asset('assets/favicon.ico') }}">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/semantic.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="{{ URL::asset('assets/js/semantic.js') }}"></script>
  <script src="{{ URL::asset('assets/js/style.js') }}"></script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-50147916-1', 'antiscam.me');
    ga('require', 'linkid', 'linkid.js');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');

  </script>

  <script>
  // Include the UserVoice JavaScript SDK (only needed once on a page)
  UserVoice=window.UserVoice||[];(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/RQYxN2marcN2Zqpj2pUQw.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)})();

  // Set colors
  UserVoice.push(['set', {
    accent_color: '#448dd6',
    trigger_color: 'white',
    trigger_background_color: '#448dd6'
  }]);

  // Identify the user and pass traits
  // To enable, replace sample data with actual user traits and uncomment the line
  UserVoice.push(['identify', {
    //email:      'john.doe@example.com', // User’s email address
    //name:       'John Doe', // User’s real name
    //created_at: 1364406966, // Unix timestamp for the date the user signed up
    //id:         123, // Optional: Unique id of the user (if set, this should not change)
    //type:       'Owner', // Optional: segment your users by type
    //account: {
    //  id:           123, // Optional: associate multiple users with a single account
    //  name:         'Acme, Co.', // Account name
    //  created_at:   1364406966, // Unix timestamp for the date the account was created
    //  monthly_rate: 9.99, // Decimal; monthly rate of the account
    //  ltv:          1495.00, // Decimal; lifetime value of the account
    //  plan:         'Enhanced' // Plan name for the account
    //}
  }]);

  // Add default trigger to the bottom-right corner of the window:
  UserVoice.push(['addTrigger', { mode: 'contact', trigger_position: 'bottom-right' }]);

  // Or, use your own custom trigger:
  //UserVoice.push(['addTrigger', '#id', { mode: 'contact' }]);

  // Autoprompt for Satisfaction and SmartVote (only displayed under certain conditions)
  UserVoice.push(['autoprompt', {}]);
  </script>

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
$browse = '';
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
    case 'browse':
        $browse = 'active';
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
  <div class="ui teal inverted small menu no-border">
    <a href="{{ url('/') }}" class="{{ $home }} item">
      <i class="home icon"></i> Home
    </a>
    <a href="{{ url('/browse') }}" class="{{ $browse }} item">
      <i class="grid layout icon"></i> Browse
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
      <a href="http://antiscam.uservoice.com/forums/249101-general" target="_blank" class="icon ui item" data-content="Request Support Help">
        <i class="wrench icon"></i>
      </a>
      <a href="{{ url('/help') }}" class="{{ $help }} icon ui item" data-content="Need help?">
        <i class="help icon"></i>
      </a>
    </div>
  </div>
  

  @yield('content')

  <div class="ui inverted teal page grid segment">
    <div class="eight wide column">
      <h3>Osem Network Enterprise</h3>
      <p>No 595 Lorong 94, Taman Ria 08000 Sungai Petani, Kedah MALAYSIA <br>
      Phone: (+603) 7731-0679 | Email: info@antiscam.me</p>
    </div>
    <div class="eight wide right floated aligned column">
      <p>Developed and build with love and care by <a href="https://twitter.com/AmirolAhmad" class="ui small label">Amirol Ahmad</a> & <a href="https://twitter.com/LisaAndrieva" class="ui small label">Evalisa Andria</a></p>
    </div>
  </div>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.antiscam.me"]);
  _paq.push(["setDomains", ["*.antiscam.me"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://analytic.antiscam.me/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 2]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->

  
</body>
</html>