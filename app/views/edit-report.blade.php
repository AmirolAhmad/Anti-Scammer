@extends('layouts.master')

@section('content')

<div class="container-report">
	<h2 class="ui header">
	  <i class="file icon"></i>
	  <div class="content">
	    Edit a report
	    <div class="sub header">Manage your account settings and set e-mail preferences.</div>
	  </div>
	</h2>

	{{ Form::open(array('url' => 'edit-report/' . $report->id, 'files' => true)) }}
		<div class="ui error form piled segment">
		  <div class="two fields">
			  <div class="field">
		    	<label>Scammer Name</label>
			    <div class="ui left labeled icon input">
			      <input type="text" name="scammer_name" value="{{ $report->scammer_name }}">
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
			      <input type="text" name="nickname" value="{{ $report->nickname }}">
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
		      <input type="text" name="scammer_email" value="{{ $report->scammer_email }}">
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
			      <input type="text" name="age" value="{{ $report->age }}">
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
			      <input type="text" name="dob"  value="{{ $report->dob }}">
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
			      <input type="text" name="nationality" value="{{ $report->nationality }}">
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
			      <input type="text" name="ic_number" value="{{ $report->ic_number }}">
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
		    	<img class="rounded ui image" src="{{ $report->profile_picture }}">
		    </div>
		    <div class="ui left labeled icon input">
		      <input type="file" name="profile_picture">
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
		      <input type="text" name="location" value="{{ $report->location }}">
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
							{{ Form::select('country', $country_options, $report->country , array('class' => 'item')) }}
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
		      <input type="text" name="contact_number" value="{{ $report->contact_number }}">
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
			      <input type="text" name="acc_bank_number" value="{{ $report->acc_bank_number }}">
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
			      <input type="text" name="bank_name" value="{{ $report->bank_name }}">
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
		      <input  type="text" name="subject" value="{{ $report->subject }}">
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
		    	<textarea type="text" name="description">{{ $report->description }}</textarea>
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
		      <input type="file" name="attachment">
		      <i class="file icon"></i>
		    </div>
		    <div class="ui left labeled icon input">
		    	<br />
		    	<a href="{{ $report->profile_picture }}" class="ui teal label">Attachment 1</a>
		    </div>
			  @foreach ($errors->get('attachment') as $error)
			  <div class="ui red pointing above ui label">
			    {{ $error }}
			  </div>
			  @endforeach
		  </div>
		  <button type="submit" class="ui red submit button"><i class="file icon"></i> Update report</button>
		</div>
	{{ Form::close() }}

</div>

@stop

@stop