
<section class="bg-white skill-selection" id="form">
<div class="text-center block-title">
<h2>What would be your ideal one more skill?</h2>
@include('blog.partials.messages')

{!! Form::open(['method' => 'POST', 'route' => 'contactSend',  'class' => 'contact-form form-skills', 'id' => 'contact_form', 'role' => 'form', 'enctype' => 'multipart/form-data' ]) !!}
    {!! csrf_field() !!}
    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <meta name="_token" content="{!! csrf_token() !!}" />

			<div class="row justify-content-center">
				<div class="input-contol col-sm-3">
					<select name="division">
						<option value="">Select Division</option>
						<option value="Business Development Division">Business Development Division</option>
						<option value="CEO Office">CEO Office</option>
						<option value="Commercial Division">Commercial Division</option>
						<option value="Corporate Affairs Division">Corporate Affairs Division</option>
						<option value="Corporate Security Division">Corporate Security Division</option>
						<option value="Enterprise Business Unit Division">Enterprise Business Unit Division</option>
						<option value="Finance Division">Finance Division</option>
						<option value="Financial Service Division">Financial Service Division</option>
						<option value="Resources Division">Resources Division</option>
						<option value="Technology Division">Technology Division</option>
						<option value="VGE Africa">VGE Africa</option>
					</select>
				</div>
				<div class="input-contol col-sm-3">
					<select name="band">
						<option  value="">Select Band</option>
						<option value="D">D</option>
						<option value="E">E</option>
						<option value="F">F</option>
						<option value="G">G</option>
						<option value="H">H</option>
						<option value="I">I</option>
					</select>
				</div>
				<div class="input-contol col-sm-3">
					<select name="skill">
						<option  value="">Select Skill</option>
						<option value="Digital Sales">Data Analytics & Science</option>
						<option value="UX/UI Deign">UX/UI Deign</option>
						<option value="Cyber Security">Cyber Security</option>
						<option value="Robotics Process Automation">Robotics Process Automation</option>
						<option value="Software Engineering">Software Engineering</option>
						<option value="IOT">IOT</option>
						<option value="AI">AI</option>
						<option value="Machine Learning">Machine Learning</option>
						<option value="Cloud Computing">Cloud Computing</option>
						<option value="Block Chain">Block Chain</option>
						<option value="Digital Services Lifestyle Content">Digital Services Lifestyle Content</option>
						<option value="Fintech">Fintech</option>
						<option value="5G">5G</option>
						<option value="Digital Marketing">Digital Marketing</option>
						<option value="Digital Media">Digital Media</option>
						<option value="Agile">Agile</option>
						<option value="Digital Sales">Digital Sales</option>
						<option value="Agile Leadership">Agile Leadership</option>
						<option value="Story Telling">Story Telling</option>
						<option value="Enterprise Architecture">Enterprise Architecture</option>
						<option value="Other">Other</option>

					</select>
				</div>
				<button class="btn btn-primary submit col-sm-2">Submit</button>
			</div>
			{!! Form::close() !!}
		</div>

</section>
