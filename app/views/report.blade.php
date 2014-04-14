@extends('layouts.master')

@section('content')
<div class="container">
	<h1>File a new report</h1>
	
	{{ Form::open() }}
	<div class="ui error form segment">
	  <div class="field">
	    <div class="ui left labeled icon input">
	      <input placeholder="Subject of your report" type="text" name="subject">
	      <i class="file icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
			  @foreach ($errors->get('subject') as $error)
			  <div class="ui red pointing above ui label">
			    {{ $error }}
			  </div>
			  @endforeach
	    </div>
	  </div>
	  <div class="field">
	    <div class="ui left labeled icon input">
	      <input placeholder="Scammer Name" type="text" name="scammer_name">
	      <i class="user icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
			  @foreach ($errors->get('scammer_name') as $error)
			  <div class="ui red pointing above ui label">
			    {{ $error }}
			  </div>
			  @endforeach
	    </div>
	  </div>
	  <div class="field">
	    <div class="ui left labeled icon input">
	      <input placeholder="Location" type="text" name="location">
	      <i class="screenshot icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
			  @foreach ($errors->get('location') as $error)
			  <div class="ui red pointing above ui label">
			    {{ $error }}
			  </div>
			  @endforeach
	    </div>
	  </div>
	  <div class="field">
	    <div class="ui left labeled icon input">
	      <input placeholder="Country" type="text" name="country">
	      <i class="globe icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
			  @foreach ($errors->get('country') as $error)
			  <div class="ui red pointing above ui label">
			    {{ $error }}
			  </div>
			  @endforeach
	    </div>
	  </div>
	  <div class="field">
	    <div class="ui left labeled icon input">
	      <input placeholder="Scammer Contact Number" type="text" name="contact_number">
	      <i class="phone icon"></i>
	      <div class="ui corner label">
	        <i class="icon asterisk"></i>
	      </div>
			  @foreach ($errors->get('contact_number') as $error)
			  <div class="ui red pointing above ui label">
			    {{ $error }}
			  </div>
			  @endforeach
	    </div>
	  </div>
	  <div class="field">
	    <div class="ui left labeled icon input">
	      <input placeholder="Scammer Account Bank Number" type="text" name="acc_bank_number">
	      <i class="payment icon"></i>
	    </div>
		  @foreach ($errors->get('acc_bank_number') as $error)
		  <div class="ui red pointing above ui label">
		    {{ $error }}
		  </div>
		  @endforeach
	  </div>
	  <div class="field">
	    <div class="ui left labeled icon input">
	      <input placeholder="Bank Name" type="text" name="bank_name">
	      <i class="building icon"></i>
	    </div>
	  </div>
	  <input type="submit" class="ui blue submit button" value="Submit">
	</div>
	{{ Form::close() }}

</div>

@stop