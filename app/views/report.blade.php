@extends('layouts.master')

@section('content')
<div class="container-report">
	<h2 class="ui header">
	  <i class="file icon"></i>
	  <div class="content">
	    File a new report
	    <div class="sub header">Manage your account settings and set e-mail preferences.</div>
	  </div>
	</h2>
	
	{{ Form::open(array('files' => true)) }}
	<div class="ui error form piled segment">
	  <div class="two fields">
		  <div class="field">
	    	<label>Scammer Name</label>
		    <div class="ui left labeled icon input">
		      <input placeholder="Ex: John Doe" type="text" name="scammer_name"{{ (Input::old('scammer_name')) ? ' value="' . e(Input::old('scammer_name')) . '"' : '' }}>
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
	    	<label>Scammer Nickname</label>
		    <div class="ui left labeled icon input">
		      <input placeholder="Ex: John, Michael, Alex" type="text" name="nickname"{{ (Input::old('nickname')) ? ' value="' . e(Input::old('nickname')) . '"' : '' }}>
		      <i class="user icon"></i>
		    </div>
			  @foreach ($errors->get('nickname') as $error)
			  <div class="ui red pointing above ui label">
			    {{ $error }}
			  </div>
			  @endforeach
		  </div>
		</div>
	  <div class="field">
	    <label>Scammer Email</label>
	    <div class="ui left labeled icon input">
	      <input placeholder="Ex: john-scammer@testmail.com" type="text" name="scammer_email"{{ (Input::old('scammer_email')) ? ' value="' . e(Input::old('scammer_email')) . '"' : '' }}>
	      <i class="mail icon"></i>
	    </div>
		  @foreach ($errors->get('scammer_email') as $error)
		  <div class="ui red pointing above ui label">
		    {{ $error }}
		  </div>
		  @endforeach
	  </div>
	  <div class="two fields">
		  <div class="field">
	    	<label>Age</label>
		    <div class="ui left labeled icon input">
		      <input placeholder="Ex: 31" type="text" name="age"{{ (Input::old('age')) ? ' value="' . e(Input::old('age')) . '"' : '' }}>
		      <i class="gift icon"></i>
		    </div>
			  @foreach ($errors->get('age') as $error)
			  <div class="ui red pointing above ui label">
			    {{ $error }}
			  </div>
			  @endforeach
		  </div>
		  <div class="field">
	    	<label>Date of Birth</label>
		    <div class="ui left labeled icon input">
		      <input placeholder="Ex: 17/04/1983" type="text" name="dob" data-content="Format should be in dd/mm/yyyy"{{ (Input::old('dob')) ? ' value="' . e(Input::old('dob')) . '"' : '' }}>
		      <i class="calendar icon"></i>
		    </div>
			  @foreach ($errors->get('dob') as $error)
			  <div class="ui red pointing above ui label">
			    {{ $error }}
			  </div>
			  @endforeach
		  </div>
		</div>
	  <div class="two fields">
		  <div class="field">
	    	<label>Nationality</label>
		    <div class="ui left labeled icon input">
		      <input placeholder="Ex: United State" type="text" name="nationality"{{ (Input::old('nationality')) ? ' value="' . e(Input::old('nationality')) . '"' : '' }}>
		      <i class="globe icon"></i>
		      <div class="ui corner label">
		        <i class="icon asterisk"></i>
		      </div>
				  @foreach ($errors->get('nationality') as $error)
				  <div class="ui red pointing above ui label">
				    {{ $error }}
				  </div>
				  @endforeach
		    </div>
		  </div>
		  <div class="field">
	    	<label>Passport Number/Identification Card Number</label>
		    <div class="ui left labeled icon input">
		      <input placeholder="Ex: A5784657" type="text" name="ic_number"{{ (Input::old('ic_number')) ? ' value="' . e(Input::old('ic_number')) . '"' : '' }}>
		      <i class="book icon"></i>
		    </div>
			  @foreach ($errors->get('ic_number') as $error)
			  <div class="ui red pointing above ui label">
			    {{ $error }}
			  </div>
			  @endforeach
		  </div>
		</div>
	  <div class="field">
	    <label>Scammer Picture</label>
	    <div class="ui left labeled icon input">
	      <input type="file" name="profile_picture"{{ (Input::old('profile_picture')) ? ' value="' . e(Input::old('profile_picture')) . '"' : '' }}>
	      <i class="camera icon"></i>
	    </div>
		  @foreach ($errors->get('profile_picture') as $error)
		  <div class="ui red pointing above ui label">
		    {{ $error }}
		  </div>
		  @endforeach
	  </div>
	  <div class="field">
	    <label>Location</label>
	    <div class="ui left labeled icon input">
	      <input placeholder="Ex: London" type="text" name="location"{{ (Input::old('location')) ? ' value="' . e(Input::old('location')) . '"' : '' }}>
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
	    <label>Country</label>
	  	<div class="ui small compact menu">
	  		<div class="ui simple">
	  			<div class="menu">
						{{ Form::select('country', $country_options, NULL, array('class' => 'item')) }}
					</div>
				</div>
			  @foreach ($errors->get('country') as $error)
			  <div class="ui red pointing above ui label">
			    {{ $error }}
			  </div>
			  @endforeach
			</div>
	  </div>
	  <div class="ui horizontal icon divider">
		  <i class="circular file icon"></i>
		</div>
	  <div class="field">
	    <label>Scammer Contact Number</label>
	    <div class="ui left labeled icon input">
	      <input placeholder="Ex: +60195264722" type="text" name="contact_number" data-content="Should contain Country ID for example: +60195151738"{{ (Input::old('contact_number')) ? ' value="' . e(Input::old('contact_number')) . '"' : '' }}>
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
	  <div class="two fields">
		  <div class="field">
		    <label>Scammer Account Bank Number</label>
		    <div class="ui left labeled icon input">
		      <input placeholder="Ex: 79812664626384" type="text" name="acc_bank_number"{{ (Input::old('acc_bank_number')) ? ' value="' . e(Input::old('acc_bank_number')) . '"' : '' }}>
		      <i class="payment icon"></i>
		    </div>
			  @foreach ($errors->get('acc_bank_number') as $error)
			  <div class="ui red pointing above ui label">
			    {{ $error }}
			  </div>
			  @endforeach
		  </div>
		  <div class="field">
		    <label>Scammer Bank Name</label>
		    <div class="ui left labeled icon input">
		      <input placeholder="Ex: Hong Leong Bank" type="text" name="bank_name"{{ (Input::old('bank_name')) ? ' value="' . e(Input::old('bank_name')) . '"' : '' }}>
		      <i class="building icon"></i>
		    </div>
			  @foreach ($errors->get('bank_name') as $error)
			  <div class="ui red pointing above ui label">
			    {{ $error }}
			  </div>
			  @endforeach
		  </div>
		</div>
	  <div class="ui horizontal icon divider">
		  <i class="circular file icon"></i>
		</div>
	  <div class="field">
	    <label>Subject of your report</label>
	    <div class="ui left labeled icon input">
	      <input placeholder="Ex: Fake social account and just want money" type="text" name="subject"{{ (Input::old('subject')) ? ' value="' . e(Input::old('subject')) . '"' : '' }}>
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
	    	<label>Description</label>
	    	<textarea type="text" name="description"></textarea>
			  @foreach ($errors->get('description') as $error)
			  <div class="ui red pointing above ui label">
			    {{ $error }}
			  </div>
			  @endforeach
	    </div>
	  </div>
	  <div class="field">
	    <label>Attachment</label>
	    <div class="ui left labeled icon input">
	      <input type="file" name="attachment"{{ (Input::old('attachment')) ? ' value="' . e(Input::old('attachment')) . '"' : '' }}>
	      <i class="file icon"></i>
	    </div>
		  @foreach ($errors->get('attachment') as $error)
		  <div class="ui red pointing above ui label">
		    {{ $error }}
		  </div>
		  @endforeach
	  </div>
	  <button type="submit" class="ui teal submit button"><i class="file icon"></i> Submit my report</button>
	</div>
	{{ Form::close() }}

</div>

@stop