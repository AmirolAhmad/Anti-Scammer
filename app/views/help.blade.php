@extends('layouts.master')

@section('content')

<div class="container">
  <h1 class="ui header">
  	Help Center
	  <a class="ui small orange label">
		  Will Update Soon
		</a>
  </h1>
</div>

<main class="ui three column grid">
  <aside class="column">
  	<div class="ui piled segment">
	  <h2>Welcome to Anti-Scam</h2>
		<h5>Get started: FAQs and the basics</h5>
		<div class="ui bulleted list">
		  <div class="item"><a>Getting started with Anti-Scam</a></div>
		  <div class="item"><a>Submitting a Report</a></div>
		  <div class="item"><a>Customizing your profile</a></div>
		</div> 
	</div>
  </aside>
  <section class="column">
  	<div class="ui piled segment">
	  <h2>Your Profile</h2>
		<h5>Manage your profile and account settings</h5>
		<div class="ui bulleted list">
		  <div class="item"><a>Recovering a lost or forgotten password</a></div>
		  <div class="item"><a>About public and protected Tweets</a></div>
		  <div class="item"><a>Posting or deleting direct messages</a></div>
		</div> 
  </section>
  <section class="column">
  	<div class="ui piled segment">
	  <h2>Discover</h2>
		<h5>Find content related to your interests</h5>
		<div class="ui bulleted list">
		  <div class="item"><a>Using Anti-Scam search</a></div>
		  <div class="item"><a>Finding scammer on Anti-Scam</a></div>
		  <div class="item"><a>Using hashtags on Anti-Scam</a></div>
		</div> 
  </section>
</main>

<div class="container">
  <h2 class="ui header">More Help</h2>
</div>

<main class="ui four column grid">
	<aside class="column">
		<div class="ui list">
			<div class="item"><a href="https://twitter.com/antiscamme" target="_blank">@Support</a></div>
		</div>
	</aside>
	<section class="column">
		<div class="ui list">
			<div class="item"><a href="http://antiscam.uservoice.com/forums/249101-general" target="_blank">Contact Support</a></div>
		</div>
	</section>
	<section class="column">
		<div class="ui list">
			<div class="item"><a href="https://twitter.com/antiscamme/lists/anti-scam-me" target="_blank">Twitter Updates by Anti-Scam Staff</a></div>
		</div>
	</section>
	<section class="column">
		<div class="ui list">
			<div class="item"><a href="https://www.facebook.com/fraud.details" target="_blank">Official Facebook Page</a></div>
		</div>
	</section>
</main>

@stop