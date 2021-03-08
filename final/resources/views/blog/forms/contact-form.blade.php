
<section class="bg-white skill-selection">
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
						<option value="Marketing">Marketing</option>
						<option value="EBU">EBU</option>
						<option value="CBU">CBU</option>
						<option value="legal">legal</option>
					</select>
				</div>
				<div class="input-contol col-sm-3">
					<select name="band">
						<option  value="">select Band</option>
						<option value="E">E</option>
						<option value="F">F</option>
						<option value="I">I</option>
						<option value="H">H</option>
					</select>
				</div>
				<div class="input-contol col-sm-3">
					<select name="skill">
						<option  value="">Select skill</option>
						<option value="Digital Sales">Digital Sales</option>
						<option value="5G">5G</option>
						<option value="Cloud Computing">Cloud Computing</option>
						<option value="AI">AI</option>
					</select>
				</div>
				<button class="btn btn-primary submit col-sm-2">Submit</button>
			</div>
			{!! Form::close() !!}
		</div>

</section>
