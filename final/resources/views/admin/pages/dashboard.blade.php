@extends('layouts.admin')

@section('template_title')
    {{ trans('Safaricom SBS') }}
@endsection

@section('template_description')
@endsection

@section('header_title')
    {{ trans('Safaricom SBS') }}
@endsection


@section('content')
<section class="bg-white">
  <div class="home-banner">
    <div class="row align-items-center">

      <div class="col-md-12 col-lg-12">
        <div class="videoslider">

            <div class="video-box">
				  <div class="banner-content">
					 <h2>#1MoreSkill</h2>
					  <h3>Our Digital Development Journey.</h3>
				   </div>
					<div class="single-popup-wrap">
						<img class="img-fluid" src="{{ asset('images/banners/inside.jpg') }}" alt="">
					</div>
             </div>
        <!--  -->
      </div>
    </div>
  </div>
</div>
</section>
<section class="p-80 courses" id="board">
  <div class="container">
    <div class="row justify-content-center">
		<div class="col-12 col-sm-9">
			<div class="row justify-content-center text-center">
				<div class="col-12 col-sm-12 col-md-6">
					<div class="board-card">
						<h3>BUSINESS DEVELOPMENT DIVISION</h3>
							<div class="progress" data-percentage="{{$dashboarddata[0]->fied1}}">
								<span class="progress-left">
									<span class="progress-bar"></span>
								</span>
								<span class="progress-right">
									<span class="progress-bar"></span>
								</span>
								<div class="progress-value">
									<div>
										<span>{{$dashboarddata[0]->fied1}}%</span>
									</div>
								</div>
							</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6">
					<div class="board-card">
						<h3>BUSINESS DEVELOPMENT DIVISION</h3>
						<div class="progress" data-percentage="{{$dashboarddata[0]->fied2}}">
								<span class="progress-left">
									<span class="progress-bar"></span>
								</span>
								<span class="progress-right">
									<span class="progress-bar"></span>
								</span>
								<div class="progress-value">
									<div>
										<span>{{$dashboarddata[0]->fied2}}%</span>
									</div>
								</div>
							</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6">
					<div class="board-card">
						<h3>BUSINESS DEVELOPMENT DIVISION</h3>
						 <div class="progress" data-percentage="{{$dashboarddata[0]->fied3}}">
								<span class="progress-left">
									<span class="progress-bar"></span>
								</span>
								<span class="progress-right">
									<span class="progress-bar"></span>
								</span>
								<div class="progress-value">
									<div>
										<span>{{$dashboarddata[0]->fied3}}%</span>
									</div>
								</div>
							</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-6">
					<div class="board-card">
						<h3>BUSINESS DEVELOPMENT DIVISION</h3>
						<div class="progress" data-percentage="{{$dashboarddata[0]->fied5}}">
								<span class="progress-left">
									<span class="progress-bar"></span>
								</span>
								<span class="progress-right">
									<span class="progress-bar"></span>
								</span>
								<div class="progress-value">
									<div>
										<span>{{$dashboarddata[0]->fied5}}%</span>
									</div>
								</div>
							</div>
					</div>
				</div>

				<div class="read-more board-btn">
	  		<a href="javascript(0)">See More</a>
	  	</div>

			</div>
		</div>
    </div>

  </div>
</section>

@endsection
