<nav class="top-nav">
</nav>

<div class="logos">
	<div class="row">
		<div class="text-left col-5 col-lg-6 col-sm-6 saf-logo">
			<img src="{{ asset('images/logos/saf-logo.png') }}" alt="SBS logo">
		</div>
		<div class="text-right col-7 col-lg-6 col-sm-6 ddj-logo">
			<div class="block-content-roam">
				@if(Request::url() === 'https://isobar-1.smoxz.com/sbs/tracker')
					<a href="https://isobar-1.smoxz.com/sbs" class="home">Home</a>
				@endif
				@if(Request::url() === 'https://isobar-1.smoxz.com/sbs')
				<a href="https://isobar-1.smoxz.com/sbs/tracker">View Progress</a>
				@endif
			</div>
			<img src="{{ asset('images/logos/ddj.png') }}" alt="SBS logo">
		</div>
		
	</div>
</div>
